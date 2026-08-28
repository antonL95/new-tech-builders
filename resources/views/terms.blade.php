@php
    $sections = [
        't1' => ['number' => '01', 'title' => 'Acceptance of Terms'],
        't2' => ['number' => '02', 'title' => 'Eligibility and Minimum Age'],
        't3' => ['number' => '03', 'title' => 'Description of Services'],
        't4' => ['number' => '04', 'title' => 'User Accounts'],
        't5' => ['number' => '05', 'title' => 'Account Deletion'],
        't6' => ['number' => '06', 'title' => 'Subscriptions and Auto-Renewal'],
        't7' => ['number' => '07', 'title' => 'Payments and Billing'],
        't8' => ['number' => '08', 'title' => 'Acceptable Use'],
        't9' => ['number' => '09', 'title' => 'Intellectual Property'],
        't10' => ['number' => '10', 'title' => 'User Content'],
        't11' => ['number' => '11', 'title' => 'Third-Party Services'],
        't12' => ['number' => '12', 'title' => 'Disclaimers'],
        't13' => ['number' => '13', 'title' => 'Limitation of Liability'],
        't14' => ['number' => '14', 'title' => 'Indemnification'],
        't15' => ['number' => '15', 'title' => 'Dispute Resolution'],
        't16' => ['number' => '16', 'title' => 'Export Compliance'],
        't17' => ['number' => '17', 'title' => 'Termination'],
        't18' => ['number' => '18', 'title' => 'Governing Law'],
        't19' => ['number' => '19', 'title' => 'Force Majeure'],
        't20' => ['number' => '20', 'title' => 'Severability'],
        't21' => ['number' => '21', 'title' => 'Entire Agreement'],
        't22' => ['number' => '22', 'title' => 'Waiver'],
        't23' => ['number' => '23', 'title' => 'Assignment'],
        't24' => ['number' => '24', 'title' => 'Contact Us'],
    ];
@endphp

<x-layouts.app title="Terms of Service - New Tech Builders">
    <x-legal.document
        eyebrow="Legal — Document 02"
        title="Terms of Service"
        :meta="['Last updated: 9 February 2026', 'New Tech Builders s.r.o.', 'Governed by Czech law']"
        :sections="$sections">

        <x-legal.section :sections="$sections" id="t1">
            <p>By accessing or using the services provided by New Tech Builders s.r.o. ("we," "our," or "us"), including our applications (distributed through the Apple App Store, Google Play Store, or other platforms), websites, and related services (collectively, the "Services"), you agree to be bound by these Terms of Service ("Terms"). These Terms constitute a legally binding agreement between you and New Tech Builders.</p>
            <p>If you are using the Services on behalf of an organization, you represent and warrant that you have the authority to bind that organization to these Terms. If you do not agree to these Terms, you may not access or use the Services.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t2">
            <p>You must be at least 16 years of age to use our Services. In certain jurisdictions, users between the ages of 13 and 16 may use our Services with verified parental or guardian consent, in accordance with applicable local laws, including the General Data Protection Regulation (GDPR).</p>
            <p>By using the Services, you represent and warrant that you meet the applicable age requirement and, if under 16, that you have obtained the necessary parental or guardian consent.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t3">
            <p>New Tech Builders provides software products, mobile applications, and related technology services. Our Services may be available on various platforms, including iOS, Android, and web browsers. We reserve the right to modify, suspend, or discontinue any part of the Services at any time, with or without notice. We will make reasonable efforts to notify you of significant changes that affect your use of the Services.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t4">
            <p>Some features of our Services may require you to create an account. When creating an account, you agree to:</p>
            <ul>
                <li>Provide accurate, current, and complete information</li>
                <li>Maintain and promptly update your account information</li>
                <li>Maintain the security and confidentiality of your account credentials</li>
                <li>Accept responsibility for all activities that occur under your account</li>
                <li>Maintain only one account per person</li>
                <li>Notify us immediately of any unauthorized use of your account</li>
            </ul>
            <p>We reserve the right to suspend or terminate accounts that contain inaccurate information or violate these Terms.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t5">
            <p>You may request the deletion of your account at any time by contacting us at <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a> with the subject line "Account Deletion Request." Upon receiving your verified request, we will process the deletion within 30 days.</p>
            <p>Before requesting account deletion, please note:</p>
            <ul>
                <li>If you have an active subscription, you must cancel it through the applicable app store (Apple App Store or Google Play Store) before or promptly after requesting deletion. Account deletion does not automatically cancel app store subscriptions.</li>
                <li>Account deletion is permanent and cannot be reversed after the 30-day processing period.</li>
                <li>Your User Content may be deleted along with your account.</li>
            </ul>
            <p>For details on what data is retained after deletion and the deletion process, please see our <a href="{{ route('privacy') }}">Privacy Policy</a>, Section 12.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t6">
            <p>Certain Services may be offered on a subscription basis. By subscribing, you agree to the following terms:</p>
            <div class="mt-6 flex flex-col gap-5">
                <div>
                    <h3>Auto-Renewal</h3>
                    <p>Subscriptions automatically renew at the end of each billing period (monthly or annually, as applicable) unless you cancel before the renewal date. You will be charged the then-current subscription price at each renewal.</p>
                </div>
                <div>
                    <h3>Billing</h3>
                    <p>Subscription payments are processed through the applicable app store (Apple App Store or Google Play Store) or our designated payment processor. All charges are billed in advance for the applicable subscription period. Prices are displayed in your local currency or the currency specified at the time of purchase.</p>
                </div>
                <div>
                    <h3>Cancellation</h3>
                    <p>You may cancel your subscription at any time through your app store account settings (Apple: Settings &gt; [Your Name] &gt; Subscriptions; Google: Play Store &gt; Subscriptions). Cancellation takes effect at the end of the current billing period. You will retain access to subscription features until the end of the period you have already paid for.</p>
                </div>
                <div>
                    <h3>Free Trials</h3>
                    <p>We may offer free trial periods. At the end of a free trial, your subscription will automatically convert to a paid subscription unless you cancel before the trial ends. You will be charged the subscription price disclosed at the start of the trial.</p>
                </div>
                <div>
                    <h3>Price Changes</h3>
                    <p>We may change subscription prices from time to time. Price changes will take effect at the start of the next billing period following notice. If you do not agree with a price change, you may cancel your subscription before the change takes effect.</p>
                </div>
                <div>
                    <h3>Refunds</h3>
                    <p>Refund requests for subscriptions purchased through app stores must be directed to the respective app store (Apple or Google) in accordance with their refund policies. We do not process refunds for app store purchases directly.</p>
                </div>
            </div>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t7">
            <p>Certain Services may require payment. Payments for in-app purchases and subscriptions are processed through the applicable app store (Apple App Store or Google Play Store) or through our designated third-party payment processors. By making a purchase, you agree to the payment terms presented at the time of purchase.</p>
            <p>All prices are displayed in the currency applicable to your region or as specified at the time of purchase. You are responsible for any taxes, fees, or charges imposed by your payment provider or local authorities. We reserve the right to change our pricing with reasonable notice.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t8">
            <p>You agree not to use the Services to:</p>
            <ul>
                <li>Violate any applicable laws or regulations</li>
                <li>Infringe upon the intellectual property rights or other rights of others</li>
                <li>Transmit harmful, threatening, abusive, defamatory, or otherwise objectionable content</li>
                <li>Attempt to gain unauthorized access to our systems, networks, or other users' accounts</li>
                <li>Distribute malware, viruses, or any other harmful software</li>
                <li>Interfere with or disrupt the integrity or performance of the Services</li>
                <li>Reverse engineer, decompile, disassemble, or attempt to derive the source code of the Services</li>
                <li>Use automated means (bots, scrapers, crawlers) to access or collect data from the Services without our prior written consent</li>
                <li>Circumvent any technological measures we use to protect the Services or enforce these Terms</li>
                <li>Engage in any activity that could damage, disable, overburden, or impair the Services</li>
            </ul>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t9">
            <p>The Services and all content, features, and functionality (including but not limited to text, graphics, logos, icons, images, audio, video, software, and code) are owned by New Tech Builders and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>
            <p>The New Tech Builders name, logo, and all related names, logos, product and service names, designs, and slogans are trademarks of New Tech Builders. You may not use such marks without our prior written permission. You may not reproduce, distribute, modify, create derivative works of, publicly display, or otherwise exploit any part of the Services without our prior written consent.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t10">
            <p>If you submit, upload, or otherwise make available any content through the Services ("User Content"), you retain ownership of your User Content. By submitting User Content, you represent and warrant that you have the right to submit such content and that it does not violate any third-party rights.</p>
            <p>By submitting User Content, you grant us a worldwide, non-exclusive, royalty-free, sublicensable license to use, reproduce, modify, adapt, publish, and display your User Content solely for the purpose of providing and improving the Services. This license continues for a reasonable period after you remove your User Content or delete your account, to the extent necessary for operational purposes (e.g., backup restoration).</p>
            <p>We reserve the right to remove any User Content that violates these Terms or that we deem inappropriate, at our sole discretion and without prior notice.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t11">
            <p>Our Services may integrate with or contain links to third-party services, websites, or applications that are not owned or controlled by New Tech Builders. We are not responsible for the content, privacy policies, or practices of any third-party services. Your use of third-party services is at your own risk and subject to the terms and conditions of those third parties.</p>
            <p>We do not endorse and are not liable for any damage or loss caused by or in connection with your use of or reliance on any third-party services.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t12">
            <p>THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE DO NOT WARRANT THAT THE SERVICES WILL BE UNINTERRUPTED, ERROR-FREE, OR SECURE.</p>
            <p>Nothing in these Terms excludes or limits any warranty, right, or remedy that cannot be excluded or limited under applicable law, including EU consumer protection law. If you are a consumer in the European Union, you retain all mandatory rights granted to you under the laws of your country of residence.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t13">
            <p>TO THE MAXIMUM EXTENT PERMITTED BY LAW, NEW TECH BUILDERS SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, OR ANY LOSS OF PROFITS OR REVENUES, WHETHER INCURRED DIRECTLY OR INDIRECTLY, OR ANY LOSS OF DATA, USE, GOODWILL, OR OTHER INTANGIBLE LOSSES RESULTING FROM YOUR ACCESS TO OR USE OF THE SERVICES.</p>
            <p>TO THE MAXIMUM EXTENT PERMITTED BY LAW, OUR TOTAL AGGREGATE LIABILITY FOR ALL CLAIMS ARISING FROM OR RELATED TO THE SERVICES SHALL NOT EXCEED THE GREATER OF (A) THE AMOUNTS YOU PAID TO US IN THE TWELVE (12) MONTHS PRECEDING THE CLAIM, OR (B) ONE HUNDRED EUROS (&euro;100).</p>
            <p>These limitations do not apply where prohibited by applicable law, including EU consumer protection regulations. Nothing in these Terms limits our liability for fraud, gross negligence, willful misconduct, death, or personal injury caused by our negligence.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t14">
            <p>You agree to indemnify, defend, and hold harmless New Tech Builders and its officers, directors, employees, and agents from any claims, liabilities, damages, losses, costs, or expenses (including reasonable attorneys' fees) arising out of or relating to your use of the Services, your violation of these Terms, or your violation of any rights of a third party.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t15">
            <p>We want to address your concerns without a formal legal case. Before filing a claim, you agree to contact us at <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a> and attempt to resolve the dispute informally for at least 30 days.</p>
            <p>If we cannot resolve the dispute informally, any dispute arising from or relating to these Terms or the Services shall be resolved through binding arbitration administered in accordance with the rules of the Czech Arbitration Court attached to the Economic Chamber of the Czech Republic and Agricultural Chamber of the Czech Republic, unless you are a consumer in the EU, in which case you may bring proceedings in the courts of your country of residence.</p>
            <p>To the extent permitted by applicable law, you agree that any disputes will be resolved on an individual basis and that you waive the right to participate in a class action, collective action, or representative proceeding. You may opt out of this arbitration agreement by sending written notice to <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a> within 30 days of first accepting these Terms.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t16">
            <p>You agree to comply with all applicable export control laws and regulations, including European Union export regulations and United States export controls (EAR, OFAC). You may not use, export, or re-export the Services in violation of any applicable export laws or to any country, entity, or person to which export is prohibited.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t17">
            <p>We may terminate or suspend your access to the Services immediately, without prior notice or liability, if you breach these Terms or if we determine that your use poses a risk to us, our users, or third parties. You may terminate your account at any time by requesting account deletion as described in Section 5.</p>
            <p>Upon termination, your right to use the Services will immediately cease. The following sections shall survive termination: Intellectual Property, User Content, Disclaimers, Limitation of Liability, Indemnification, Dispute Resolution, Governing Law, and any other provisions that by their nature should survive.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t18">
            <p>These Terms shall be governed by and construed in accordance with the laws of the Czech Republic, without regard to its conflict of law provisions. If you are a consumer resident in the European Union, you also benefit from any mandatory provisions of the consumer protection law of your country of residence, and nothing in these Terms affects your rights as a consumer under such laws.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t19">
            <p>We shall not be liable for any failure or delay in performance of our obligations under these Terms arising from circumstances beyond our reasonable control, including but not limited to natural disasters, pandemics, war, terrorism, government actions, power failures, internet disruptions, or other force majeure events.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t20">
            <p>If any provision of these Terms is held to be invalid, illegal, or unenforceable by a court of competent jurisdiction, such provision shall be modified to the minimum extent necessary to make it valid and enforceable, or if modification is not possible, shall be severed from these Terms. The remaining provisions shall continue in full force and effect.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t21">
            <p>These Terms, together with our <a href="{{ route('privacy') }}">Privacy Policy</a>, constitute the entire agreement between you and New Tech Builders regarding your use of the Services and supersede all prior agreements, understandings, and representations, whether written or oral.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t22">
            <p>Our failure to enforce any right or provision of these Terms shall not be considered a waiver of that right or provision. Any waiver of any provision of these Terms will be effective only if in writing and signed by an authorized representative of New Tech Builders.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t23">
            <p>You may not assign or transfer your rights or obligations under these Terms without our prior written consent. We may assign or transfer our rights and obligations under these Terms without restriction, including in connection with a merger, acquisition, or sale of assets. Any attempted assignment in violation of this section shall be null and void.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="t24">
            <p>If you have any questions, concerns, or requests regarding these Terms of Service, please contact us at:</p>
            <div class="mt-6 flex flex-col gap-1.5 [&>p]:mt-0">
                <p class="font-semibold text-ink">New Tech Builders s.r.o.</p>
                <p>Email: <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a></p>
            </div>
            <p>We aim to respond to all inquiries within 30 days.</p>
        </x-legal.section>
    </x-legal.document>
</x-layouts.app>
