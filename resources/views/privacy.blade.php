@php
    $sections = [
        'p1' => ['number' => '01', 'title' => 'Introduction'],
        'p2' => ['number' => '02', 'title' => 'Information We Collect'],
        'p3' => ['number' => '03', 'title' => 'Legal Basis for Processing'],
        'p4' => ['number' => '04', 'title' => 'How We Use Your Information'],
        'p5' => ['number' => '05', 'title' => 'Cookies and Tracking Technologies', 'toc' => 'Cookies and Tracking'],
        'p6' => ['number' => '06', 'title' => 'Third-Party Services and SDKs'],
        'p7' => ['number' => '07', 'title' => 'Information Sharing and Disclosure', 'toc' => 'Sharing and Disclosure'],
        'p8' => ['number' => '08', 'title' => 'International Data Transfers'],
        'p9' => ['number' => '09', 'title' => 'Data Retention'],
        'p10' => ['number' => '10', 'title' => 'Data Security'],
        'p11' => ['number' => '11', 'title' => 'Your Rights'],
        'p12' => ['number' => '12', 'title' => 'Account Deletion'],
        'p13' => ['number' => '13', 'title' => 'Automated Decision-Making'],
        'p14' => ['number' => '14', 'title' => 'Do Not Track Signals'],
        'p15' => ['number' => '15', 'title' => 'Third-Party Links'],
        'p16' => ['number' => '16', 'title' => "Children's Privacy"],
        'p17' => ['number' => '17', 'title' => 'Google Play Store'],
        'p18' => ['number' => '18', 'title' => 'Apple App Store'],
        'p19' => ['number' => '19', 'title' => 'Push Notifications'],
        'p20' => ['number' => '20', 'title' => 'Changes to This Policy'],
        'p21' => ['number' => '21', 'title' => 'Contact Us'],
    ];
@endphp

<x-layouts.app title="Privacy Policy - New Tech Builders">
    <x-legal.document
        eyebrow="Legal — Document 01"
        title="Privacy Policy"
        :meta="['Last updated: 9 February 2026', 'New Tech Builders s.r.o.', 'GDPR · CCPA · App Store · Google Play']"
        :sections="$sections">

        <x-legal.section :sections="$sections" id="p1">
            <p>New Tech Builders s.r.o. ("we," "our," or "us"), a company established in the Czech Republic, respects your privacy and is committed to protecting your personal data in accordance with the General Data Protection Regulation (GDPR) and other applicable data protection laws. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our applications (distributed through the Apple App Store, Google Play Store, or other platforms), websites, and related services (collectively, the "Services").</p>
            <p>By accessing or using our Services, you acknowledge that you have read and understood this Privacy Policy. If you do not agree with the practices described herein, please do not use our Services.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p2">
            <p>We collect the following categories of information, mapped to their purposes as required by applicable app store policies:</p>
            <div class="mt-6 flex flex-col gap-5">
                <div>
                    <h3>Account Information</h3>
                    <p>Information you voluntarily provide when creating an account, such as your name, email address, and profile details. This data is collected to provide and personalize our Services, process your account registration, and communicate with you.</p>
                </div>
                <div>
                    <h3>Usage Data</h3>
                    <p>Information automatically collected about how you interact with our Services, including features accessed, actions taken, session duration, and interaction patterns. This data helps us improve our Services, fix bugs, and understand user behavior.</p>
                </div>
                <div>
                    <h3>Device Information</h3>
                    <p>Device identifiers, hardware model, operating system and version, screen resolution, language settings, and mobile network information. This data is used for compatibility, analytics, and security purposes.</p>
                </div>
                <div>
                    <h3>Log Data</h3>
                    <p>Server logs that may include your IP address, browser type, referring/exit pages, date and time stamps, and clickstream data. This data is used for security monitoring, troubleshooting, and analytics.</p>
                </div>
                <div>
                    <h3>Push Notification Tokens</h3>
                    <p>If you opt in to push notifications, we collect device tokens necessary to deliver notifications. These tokens are used solely for sending you the notifications you have requested.</p>
                </div>
            </div>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p3">
            <p>Under the GDPR (Article 6), we process your personal data based on the following legal grounds:</p>
            <ul>
                <li><strong>Consent:</strong> Where you have given clear consent for us to process your personal data for a specific purpose (e.g., marketing communications, push notifications).</li>
                <li><strong>Contract:</strong> Where processing is necessary for the performance of a contract with you (e.g., providing our Services, managing your account).</li>
                <li><strong>Legitimate Interests:</strong> Where processing is necessary for our legitimate interests, provided those interests are not overridden by your rights (e.g., analytics, improving Services, fraud prevention).</li>
                <li><strong>Legal Obligation:</strong> Where processing is necessary to comply with a legal obligation (e.g., tax records, law enforcement requests).</li>
            </ul>
            <p>Where we rely on consent, you have the right to withdraw it at any time by contacting us or adjusting your device settings. Withdrawal of consent does not affect the lawfulness of processing performed prior to withdrawal.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p4">
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide, operate, maintain, and improve our Services</li>
                <li>Process transactions and send related information, including purchase confirmations and invoices</li>
                <li>Send you technical notices, updates, security alerts, and support messages</li>
                <li>Send push notifications (where you have opted in)</li>
                <li>Respond to your comments, questions, and customer service requests</li>
                <li>Personalize your experience and deliver content relevant to your interests</li>
                <li>Monitor and analyze trends, usage, and activities for analytics and product improvement</li>
                <li>Detect, investigate, and prevent security incidents, fraud, and other harmful activities</li>
                <li>Comply with legal obligations and enforce our terms and policies</li>
            </ul>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p5">
            <p>We and our service providers use cookies, local storage, and similar tracking technologies to collect information about your interactions with our Services. These technologies include:</p>
            <ul>
                <li><strong>Session Cookies:</strong> Temporary cookies that expire when you close your browser, used to maintain your session and preferences.</li>
                <li><strong>Analytics Technologies:</strong> Tools that help us understand how users interact with our Services, including page views, feature usage, and navigation patterns.</li>
                <li><strong>Local Storage:</strong> Data stored on your device to improve performance and remember your preferences.</li>
            </ul>
            <p>You can manage cookie preferences through your browser or device settings. Disabling cookies may affect the functionality of certain features. Our mobile applications may use analytics SDKs that collect anonymized usage data; you can opt out of analytics collection through your device's privacy settings where available.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p6">
            <p>Our Services may integrate third-party services and software development kits (SDKs) that collect and process data on our behalf or for their own purposes. These third-party categories include:</p>
            <ul>
                <li><strong>Analytics Providers:</strong> To help us understand usage patterns and improve our Services.</li>
                <li><strong>Crash Reporting Services:</strong> To identify and fix technical issues and bugs.</li>
                <li><strong>Cloud Hosting Providers:</strong> To store and process data securely on our behalf.</li>
                <li><strong>Push Notification Services:</strong> To deliver push notifications to your device.</li>
                <li><strong>Payment Processors:</strong> To process transactions securely. We do not store your full payment card details.</li>
            </ul>
            <p>These third-party services have their own privacy policies governing the use of your information. We encourage you to review their policies.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p7">
            <p>We do not sell, rent, or trade your personal information to third parties. We may share information in the following circumstances:</p>
            <ul>
                <li>With service providers who assist in operating our Services, subject to contractual obligations to protect your data</li>
                <li>With app store platforms (Apple, Google) as required for app distribution, purchase processing, and compliance with their policies</li>
                <li>To comply with legal obligations, court orders, or respond to lawful requests from public authorities</li>
                <li>To protect the rights, privacy, safety, or property of New Tech Builders, our users, or the public</li>
                <li>In connection with a merger, acquisition, reorganization, or sale of assets, in which case you will be notified of any change in ownership or use of your personal data</li>
                <li>With your consent or at your direction</li>
            </ul>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p8">
            <p>As a company based in the Czech Republic (EU), we process most data within the European Economic Area (EEA). However, some of our service providers may be located outside the EEA. When we transfer your personal data outside the EEA, we ensure adequate protection through one or more of the following mechanisms:</p>
            <ul>
                <li>Transfers to countries with an EU adequacy decision</li>
                <li>EU Standard Contractual Clauses (SCCs) approved by the European Commission</li>
                <li>Other appropriate safeguards as permitted under the GDPR</li>
            </ul>
            <p>By using our Services, you acknowledge that your data may be transferred to and processed in countries outside your country of residence, which may have different data protection standards.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p9">
            <p>We retain your personal information only for as long as necessary to fulfill the purposes for which it was collected. Our retention periods are as follows:</p>
            <ul>
                <li><strong>Account Data:</strong> Retained for the duration of your active account and for 30 days following account deletion to allow for recovery.</li>
                <li><strong>Usage and Analytics Data:</strong> Retained in identifiable form for up to 24 months, after which it is anonymized or deleted.</li>
                <li><strong>Transaction Records:</strong> Retained as required by applicable tax and accounting laws (typically 5-10 years).</li>
                <li><strong>Support Communications:</strong> Retained for up to 24 months after resolution.</li>
                <li><strong>Log Data:</strong> Retained for up to 12 months for security and troubleshooting purposes.</li>
            </ul>
            <p>When we no longer need your information, we will securely delete or anonymize it in accordance with our data management practices.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p10">
            <p>We implement appropriate technical and organizational security measures to protect your personal information, including:</p>
            <ul>
                <li>TLS/SSL encryption for data in transit</li>
                <li>Encryption at rest for stored personal data</li>
                <li>Access controls limiting data access to authorized personnel only</li>
                <li>Regular security assessments and monitoring</li>
                <li>Secure development practices</li>
            </ul>
            <p>However, no method of transmission over the Internet or electronic storage is 100% secure. While we strive to protect your personal information, we cannot guarantee absolute security.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p11">
            <p>Under the GDPR and other applicable data protection laws, you have the following rights regarding your personal data:</p>
            <div class="mt-6 flex flex-col gap-5">
                <div>
                    <h3>GDPR Rights (EEA/UK Residents)</h3>
                    <ul>
                        <li><strong>Right of Access:</strong> Request a copy of the personal data we hold about you.</li>
                        <li><strong>Right to Rectification:</strong> Request correction of inaccurate or incomplete data.</li>
                        <li><strong>Right to Erasure:</strong> Request deletion of your personal data ("right to be forgotten").</li>
                        <li><strong>Right to Restrict Processing:</strong> Request that we limit how we use your data.</li>
                        <li><strong>Right to Data Portability:</strong> Receive your data in a structured, machine-readable format.</li>
                        <li><strong>Right to Object:</strong> Object to processing based on legitimate interests or for direct marketing.</li>
                        <li><strong>Right to Withdraw Consent:</strong> Where processing is based on consent, withdraw it at any time.</li>
                    </ul>
                </div>
                <div>
                    <h3>CCPA Rights (California Residents)</h3>
                    <ul>
                        <li>Right to know what personal information is collected, used, and shared</li>
                        <li>Right to delete personal information</li>
                        <li>Right to opt out of the sale of personal information (we do not sell personal information)</li>
                        <li>Right to non-discrimination for exercising your rights</li>
                    </ul>
                </div>
            </div>
            <p>To exercise any of these rights, please contact us at <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a>. We will respond to your request within 30 days. If you are in the EEA and believe your data protection rights have been violated, you have the right to lodge a complaint with the Czech Data Protection Authority (ÚOOÚ) or your local supervisory authority.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p12">
            <p>You may request the deletion of your account and associated personal data at any time by contacting us at <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a> with the subject line "Account Deletion Request."</p>
            <p>Upon receiving your request, we will:</p>
            <ul>
                <li>Verify your identity to prevent unauthorized deletion</li>
                <li>Process your deletion request within 30 days</li>
                <li>Permanently delete your account data, including your profile, preferences, and associated content</li>
                <li>Delete your data from active systems and, within a reasonable timeframe, from backup systems</li>
            </ul>
            <p>Certain information may be retained as required by law (e.g., transaction records for tax compliance) or for legitimate business purposes (e.g., fraud prevention). Any retained data will be securely stored and will not be used for any other purpose. If you have an active subscription, please cancel it before requesting account deletion; see our <a href="{{ route('terms') }}">Terms of Service</a> for details.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p13">
            <p>In accordance with GDPR Article 22, we do not currently use automated decision-making, including profiling, that produces legal effects or similarly significant effects on you. If this changes in the future, we will update this policy and provide you with information about the logic involved and the significance of such processing.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p14">
            <p>Some browsers transmit "Do Not Track" (DNT) signals to websites. Due to the lack of a common industry standard for interpreting DNT signals, our Services do not currently respond to DNT signals. We will update this policy if a standard for responding to DNT signals is established.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p15">
            <p>Our Services may contain links to third-party websites, applications, or services that are not operated by us. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services. We encourage you to review the privacy policies of any third-party sites you visit.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p16">
            <p>Our Services are not directed to children under the age of 16. We do not knowingly collect personal information from children under 16 without parental consent. In certain jurisdictions, children between the ages of 13 and 16 may use our Services with verified parental or guardian consent, in accordance with applicable local laws.</p>
            <p>If you are a parent or guardian and believe your child has provided us with personal information without your consent, please contact us at <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a>. If we become aware that we have collected personal information from a child without appropriate consent, we will take steps to delete that information promptly.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p17">
            <p>For applications distributed through the Google Play Store, we comply with Google Play's data safety requirements and Developer Program Policies. In accordance with Google's Data Safety section requirements, our applications may collect and share data as described in this policy. The specific data types collected include:</p>
            <ul>
                <li><strong>Personal Info:</strong> Name, email address</li>
                <li><strong>App Activity:</strong> App interactions, in-app search history</li>
                <li><strong>App Info and Performance:</strong> Crash logs, diagnostics</li>
                <li><strong>Device or Other IDs:</strong> Device identifiers</li>
            </ul>
            <p>You can review the specific data safety information for each application on its Google Play Store listing. You may request account and data deletion as described in Section 12 of this policy.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p18">
            <p>For applications distributed through the Apple App Store, we comply with Apple's App Store Review Guidelines and privacy requirements, including App Privacy labels and App Tracking Transparency (ATT). Specifically:</p>
            <ul>
                <li>Our applications do not track users across apps and websites owned by other companies without your explicit consent via the ATT prompt.</li>
                <li>We do not use device advertising identifiers (IDFA) for cross-app tracking.</li>
                <li>Our App Privacy labels accurately reflect the data collection practices described in this policy.</li>
                <li>You may request account and data deletion as described in Section 12 of this policy, in compliance with Apple's account deletion requirements.</li>
            </ul>
            <p>You can review the specific privacy information for each application on its App Store listing.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p19">
            <p>With your permission, we may send push notifications to your device to provide updates, reminders, and other information related to our Services. Push notifications are opt-in and can be managed at any time through your device settings:</p>
            <ul>
                <li><strong>iOS:</strong> Settings &gt; Notifications &gt; [App Name]</li>
                <li><strong>Android:</strong> Settings &gt; Apps &gt; [App Name] &gt; Notifications</li>
            </ul>
            <p>Disabling push notifications will not affect the core functionality of our Services.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p20">
            <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. When we make material changes, we will notify you by updating the "Last updated" date at the top of this policy and, where appropriate, by providing notice through email or an in-app notification.</p>
            <p>We encourage you to review this Privacy Policy periodically. Your continued use of our Services after any changes constitutes acceptance of the updated policy.</p>
        </x-legal.section>

        <x-legal.section :sections="$sections" id="p21">
            <p>If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us at:</p>
            <div class="mt-6 flex flex-col gap-1.5 [&>p]:mt-0">
                <p class="font-semibold text-ink">New Tech Builders s.r.o.</p>
                <p>Email: <a href="mailto:info@new-tech-builders.com">info@new-tech-builders.com</a></p>
            </div>
            <p>We aim to respond to all inquiries within 30 days.</p>
        </x-legal.section>
    </x-legal.document>
</x-layouts.app>
