#!/usr/bin/env bash
set -euo pipefail

: "${COOLIFY_URL:?COOLIFY_URL is required}"
: "${COOLIFY_TOKEN:?COOLIFY_TOKEN is required}"

APPLICATION_UUID="${1:?usage: coolify-deploy.sh <application-uuid>}"
POLL_SECONDS="${POLL_SECONDS:-10}"

if [[ -n "${DEPLOY_SHA:-}" ]]; then
    MAIN_SHA="$(git ls-remote origin refs/heads/main | cut -f1)"

    if [[ "$MAIN_SHA" != "$DEPLOY_SHA" ]]; then
        echo "main is at ${MAIN_SHA}, not ${DEPLOY_SHA}; the run for the newer commit deploys ${APPLICATION_UUID}"
        exit 0
    fi
fi

coolify() {
    curl --fail-with-body --silent --show-error \
        --header "Authorization: Bearer ${COOLIFY_TOKEN}" \
        --header "Accept: application/json" \
        "$@"
}

if ! RESPONSE="$(coolify --request POST "${COOLIFY_URL}/api/v1/deploy?uuid=${APPLICATION_UUID}")"; then
    echo "Coolify refused to deploy ${APPLICATION_UUID}: ${RESPONSE}" >&2
    exit 1
fi

DEPLOYMENT_UUID="$(jq --raw-output '.deployments[0].deployment_uuid // empty' <<<"$RESPONSE")"

if [[ -z "$DEPLOYMENT_UUID" ]]; then
    echo "Coolify did not queue a deployment for ${APPLICATION_UUID}: ${RESPONSE}" >&2
    exit 1
fi

echo "Deploying ${APPLICATION_UUID}, Coolify deployment ${DEPLOYMENT_UUID}"

while true; do
    STATUS="$(coolify --retry 5 --retry-all-errors --retry-delay 5 \
        "${COOLIFY_URL}/api/v1/deployments/${DEPLOYMENT_UUID}" | jq --raw-output '.status')"

    case "$STATUS" in
        finished)
            echo "${APPLICATION_UUID} deployed"
            exit 0
            ;;
        failed | cancelled-by-user)
            echo "Deployment ${DEPLOYMENT_UUID} of ${APPLICATION_UUID} ended as ${STATUS}" >&2
            exit 1
            ;;
    esac

    sleep "$POLL_SECONDS"
done
