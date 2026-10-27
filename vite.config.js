import {
    defineConfig,
    loadEnv,
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

function devContainerServer(mode) {
    const viteOrigin = process.env.DEV_VITE_ORIGIN;
    const appUrl = loadEnv(mode, process.cwd(), 'APP_URL').APP_URL;

    if (process.env.DEV_VITE_CONTAINER !== '1' || !viteOrigin || !appUrl) {
        return {};
    }

    const viteUrl = new URL(viteOrigin);

    return {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true,
        origin: viteUrl.origin,
        allowedHosts: [viteUrl.hostname],
        cors: { origin: [new URL(appUrl).origin, /^https?:\/\/(localhost|127\.0\.0\.1)(:\d+)?$/] },
        hmr: { protocol: 'wss', host: viteUrl.hostname, clientPort: 443 },
    };
}

export default defineConfig(({ mode }) => ({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
        ...devContainerServer(mode),
    },
}));
