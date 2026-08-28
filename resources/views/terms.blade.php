@php
    $sections = [
        't1' => ['number' => '01', 'title' => 'Terms of Use'],
        't2' => ['number' => '02', 'title' => 'What Tensen Is'],
        't3' => ['number' => '03', 'title' => 'Acceptance'],
        't4' => ['number' => '04', 'title' => 'Registration and Your Account'],
        't5' => ['number' => '05', 'title' => 'Term and Termination'],
        't6' => ['number' => '06', 'title' => 'Tensen Pro Subscription'],
        't7' => ['number' => '07', 'title' => 'Your Use of Tensen'],
        't8' => ['number' => '08', 'title' => 'Your Content'],
        't9' => ['number' => '09', 'title' => 'Licence and Ownership'],
        't10' => ['number' => '10', 'title' => 'No Professional Advice'],
        't11' => ['number' => '11', 'title' => 'Maintenance and Support'],
        't12' => ['number' => '12', 'title' => 'Privacy'],
        't13' => ['number' => '13', 'title' => 'Warranties and Limitation of Liability'],
        't14' => ['number' => '14', 'title' => 'Indemnification'],
        't15' => ['number' => '15', 'title' => 'Third-Party Services'],
        't16' => ['number' => '16', 'title' => 'Consumer Information'],
        't17' => ['number' => '17', 'title' => 'Governing Law'],
        't18' => ['number' => '18', 'title' => 'Amendments'],
        't19' => ['number' => '19', 'title' => 'Severability'],
        't20' => ['number' => '20', 'title' => 'Contact'],
    ];
@endphp

<x-layouts.app title="Terms of Service - New Tech Builders">
    <x-legal.document
        eyebrow="Legal — Document 02"
        title="Terms of Service"
        :meta="['Last updated: 15 August 2026', 'New Tech Builders s.r.o.', 'Governed by Czech law']"
        :sections="$sections">

        <x-legal.section :sections="$sections" id="t1">
            <p>tensen.app is a sleep and dream journal developed and offered to you by NewTech Builders s.r.o., Id. No. 21811911, a company registered at Příčná 1892/4, Nové Město (Praha 1), 110 00 Praha, Czech Republic (&quot;Provider&quot;). Your use of tensen.app, of the Tensen mobile application, and of all related services provided through them by the Provider (together &quot;Tensen&quot;) is subject to the following terms (&quot;Terms&quot;), which upon your acceptance form a legally binding agreement between you and the Provider (&quot;Agreement&quot;).</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t2">
            <p>Tensen is a structured journal for your dreams and your sleep. You log a dream, add structured details such as the night it happened, mood, vividness, recall clarity and lucidity, flag nightmares and recurring dreams, and tag the people, places, symbols and emotions in the entry. Tensen turns those entries into descriptive analytics: how often you log, how your recall changes over time, your most frequent tags, your lucidity and nightmare rates, and a calendar view of your logging streak.</p>
            <p>With your permission Tensen also reads Sleep Analysis data from Apple Health and lines each night of sleep up with the dream you logged for that night.</p>
            <p>Everything Tensen shows you describes entries you have already written and sleep sessions already recorded on your device. Tensen is a journalling and tracking tool. It is not a medical device, and it does not tell you what will happen.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t3">
            <p>These Terms regulate the legal relationship between you and the Provider. They are always available in the Tensen application and at tensen.app. You may not use Tensen unless you accept the Terms during sign-up. By using or accessing Tensen you accept the Terms and agree to be bound by them.</p>
            <p>You may not accept these Terms unless you are at least 15 years of age and have sufficient legal capacity to enter into a contract. If you are under 18 years of age, you must have your parent&#x27;s or legal guardian&#x27;s permission to accept the Terms and use Tensen.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t4">
            <p>To use Tensen you must create an account with your e-mail address, or sign in with Apple. You agree to provide accurate, truthful and current information and to keep it up to date. You must keep your login credentials confidential, and you are solely responsible for activity under your account. The Provider may refuse a registration or suspend an account that breaches these Terms.</p>
            <p>You can delete your account and all data associated with it at any time from the account settings inside the application, or by writing to <a href="mailto:support@tensen.app">support@tensen.app</a>]. Deletion is permanent.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t5">
            <p>The Agreement remains in force while you use Tensen and until it is terminated by you or by the Provider. You may terminate it at any time by deleting your account. The Provider may terminate the Agreement on two months&#x27; notice, or without notice where required by law or where you have materially breached these Terms. If the Agreement ends because you breached the Terms, you are not entitled to a refund.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t6">
            <p>Tensen is free to use for unlimited journalling, structured logging and manual tagging. <strong>Tensen Pro</strong> is an optional paid subscription that additionally unlocks automatic AI tagging, the full analytics set, Apple Health sleep correlation, voice capture, the lucid dreaming toolkit, the nightmare rescripting flow and journal export.</p>
            <p>Tensen Pro is offered as a <strong>monthly</strong> plan with a one month duration and an <strong>annual</strong> plan with a one year duration. Both are auto-renewable subscriptions. The price of each plan is shown in US dollars (USD) in the application, on the App Store product page and on the pricing page of this website, before you confirm the purchase. Prices include VAT where applicable.</p>
            <p>Each subscription <strong>automatically renews</strong> for a further period of the same length at the then current price, unless it is cancelled at least 24 hours before the end of the current period. Your account is charged for the renewal within 24 hours before the current period ends.</p>
            <p>For purchases made through the App Store, payment is charged to your Apple ID account on confirmation of purchase, renewals are charged to the same Apple ID account, and you manage or cancel the subscription in your <strong>Apple ID settings</strong> under Subscriptions. Deleting the application does not cancel the subscription.</p>
            <p>For purchases made on this website, payment is processed by Stripe and you manage or cancel the subscription in your Tensen account settings.</p>
            <p>Cancelling stops the next renewal. It does not refund the period already paid for. Statutory rights of withdrawal for consumers in the European Union are unaffected; where the service starts immediately at your request, the withdrawal right ends once the service has been fully provided.</p>
            <p>If a plan offers a trial period, the paid plan begins automatically when the trial ends unless you cancel before that point.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t7">
            <p>You must use Tensen in accordance with these Terms, for its intended purpose, and in compliance with all applicable laws and any third-party terms that apply. You must not interfere with Tensen or its infrastructure, attempt to access accounts or data that are not yours, or use Tensen to store or distribute unlawful content.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t8">
            <p>Your journal entries, tags, audio recordings and any other material you enter or upload remain yours. You keep copyright and every other right in them. You grant the Provider a worldwide, non-exclusive, royalty-free licence to store and process that content strictly to the extent needed to run the service for you: to display it back to you, to produce your analytics, and, where you use the AI features, to send it to the processors listed in the Privacy Policy. The Provider does not sell your content and does not use it for advertising.</p>
            <p>You are responsible for the content you provide and must ensure it is lawful. The Provider may remove content that breaches these Terms or applicable law.</p>
            <p>You can export your full journal as CSV, JSON or PDF at any time.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t9">
            <p>Tensen and all rights in it, including intellectual property rights, remain the property of the Provider or its licensors. The Provider grants you a limited, non-exclusive, non-transferable, non-sublicensable licence to access and use Tensen for personal, non-commercial purposes. You may not modify, reverse engineer or create derivative works of Tensen.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t10">
            <p>Tensen produces descriptive summaries, tags and reflective notes about the entries you have logged. These describe your own logged data. They are not medical, psychological, psychiatric or diagnostic advice, they are not a diagnosis or a treatment, and they must not be used as a substitute for consulting a qualified professional.</p>
            <p>The nightmare rescripting flow is a self-guided journalling exercise in which you rewrite a distressing dream and rehearse the rewritten version. It is inspired by written reflection practices, it is not clinical treatment, and it is not supervised by a clinician. If a dream or a sleep problem is causing you distress, please speak to a doctor or a licensed therapist. If you are in crisis, contact your local emergency services.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t11">
            <p>The Provider may update Tensen, change how features work, or discontinue features. The Provider does not guarantee uninterrupted availability. Support is available at <a href="mailto:support@tensen.app">support@tensen.app</a>] and on the support page of this website.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t12">
            <p>The Provider processes your personal data as described in the Privacy Policy, which forms an integral part of these Terms.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t13">
            <p>Tensen is provided as it stands. To the extent permitted by law, the Provider is not liable for indirect, incidental, special, punitive or consequential damages arising out of your use of or inability to use Tensen. Nothing in these Terms limits liability that cannot be limited by law, including liability for death or personal injury caused by negligence, for fraud, or under mandatory consumer protection law. The Provider&#x27;s total liability for all damages is limited to the amount you paid for Tensen in the twelve months preceding the event giving rise to the claim.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t14">
            <p>You agree to hold the Provider harmless from third-party claims arising out of your use of Tensen in breach of these Terms.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t15">
            <p>Tensen integrates third-party services, including Apple&#x27;s App Store and HealthKit, Stripe, RevenueCat and the AI processors listed in the Privacy Policy. Your use of those services is subject to their own terms. The Provider does not guarantee their availability.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t16">
            <p>If you are a consumer in the European Union, you may bring a dispute before the courts of your place of residence. Consumer protection in the Czech Republic is supervised by the Czech Trade Inspection Authority (Česká obchodní inspekce), Štěpánská 796/44, 110 00 Praha 1, <a href="http://www.coi.cz">www.coi.cz</a>, which also acts as the body for out-of-court settlement of consumer disputes.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t17">
            <p>These Terms are governed by the laws of the Czech Republic. This choice does not deprive a consumer of the protection of mandatory provisions of the law of the country in which the consumer is habitually resident.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t18">
            <p>The Provider may amend these Terms where required by changes in law, in the service, or in the way it is operated. You will be told about material changes in advance in the application and by e-mail. If you do not agree with a change, you may terminate the Agreement by deleting your account.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t19">
            <p>If any provision of these Terms is held invalid, the remaining provisions stay in force, and the invalid provision is replaced by a valid one that comes closest to its original intent.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t20">
            <p>NewTech Builders s.r.o., Id. No. 21811911, registered office at Příčná 1892/4, Nové Město (Praha 1), 110 00 Praha, Czech Republic. E-mail: <a href="mailto:support@tensen.app">support@tensen.app</a>].</p>
        </x-legal.section>
    </x-legal.document>
</x-layouts.app>
