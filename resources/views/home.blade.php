@php
    $services = [
        ['number' => '01', 'title' => 'iOS & Android Development', 'description' => 'Native and cross-platform applications built for release — through review, store listing, and the updates after launch. Both stores, one codebase where it makes sense to share one.'],
        ['number' => '02', 'title' => 'AI Development', 'description' => 'Model-backed features inside real products: retrieval, generation, and automation wired into an app that has users, rate limits, and a bill to keep down.'],
        ['number' => '03', 'title' => 'Product Building', 'description' => 'The whole arc, when there is no team yet: scope, design, build, submit, iterate. We have run it end to end on our own products, which is where the estimates come from.'],
        ['number' => '04', 'title' => 'Consultancy', 'description' => 'Short engagements for teams that already build: architecture review, platform and stack decisions, App Store and Play review problems, release process.'],
    ];

    $facts = [
        ['Entity', 's.r.o.'],
        ['Based', 'Czech Republic, EU'],
        ['Platforms', 'iOS, Android, Web'],
        ['Shipped', 'Tensen, Moneysky, PromptStor'],
    ];

    $products = [
        ['name' => 'Moneysky', 'copy' => 'All your finances in one place. Aggregates European bank accounts, investments, and portfolios into a single dashboard, with AI categorisation and tax tools for freelancers and small businesses.', 'image' => 'images/moneysky-mobile.png', 'alt' => 'Moneysky web app on a phone-sized screen', 'url' => 'https://moneysky.app/', 'domain' => 'moneysky.app'],
        ['name' => 'PromptStor', 'copy' => 'A centralized prompt library that lives directly inside ChatGPT, Claude, Gemini, Perplexity, and Microsoft Copilot, so your best prompts are always one click away. It ships as a browser extension for Chrome and Firefox, with team collaboration for sharing and reusing prompts across an entire organisation.', 'image' => 'images/promptstor-mobile.png', 'alt' => 'PromptStor web app on a phone-sized screen', 'url' => 'https://promptstor.app/', 'domain' => 'promptstor.app'],
    ];
@endphp

<x-layouts.app title="New Tech Builders — Software for iOS, Android, and AI">
    <section class="mx-auto grid max-w-[1240px] grid-cols-[minmax(0,1fr)_260px] items-end gap-16 px-10 pt-24 pb-20 tab:grid-cols-1 tab:items-start tab:gap-11 tab:px-6 tab:pt-16 tab:pb-14 mob:gap-9 mob:px-4 mob:pt-11 mob:pb-10">
        <div>
            <div class="mono-eyebrow mb-9 text-muted">New Tech Builders s.r.o. — Prague, Czech Republic</div>

            <h1 class="text-[88px] leading-[0.96] font-semibold tracking-[-0.035em] text-balance text-ink lap:text-[68px] tab:text-[56px] mob:text-[40px]">We build software for iOS, Android, and&nbsp;AI.</h1>

            <p class="mt-8 max-w-[560px] text-[18px] leading-[1.55] text-pretty text-body">A small product studio. We take mobile and AI products from scoping through to release on the App Store and Google Play — and we consult when a team only needs the hard part solved.</p>

            <div class="mt-10 flex flex-wrap items-center gap-6">
                <a href="mailto:info@new-tech-builders.com" class="inline-flex items-center gap-3 bg-ink px-6 py-[15px] text-[14px] font-medium tracking-[0.01em] text-paper no-underline hover:bg-accent">
                    Start a conversation
                    <span class="font-mono text-[13px]">↗</span>
                </a>
                <span class="font-mono text-[12px] text-muted">info@new-tech-builders.com</span>
            </div>
        </div>

        <dl class="m-0 flex flex-col border-t border-ink">
            @foreach ($facts as [$term, $value])
                <div class="flex justify-between gap-4 border-b border-hairline py-3">
                    <dt class="mono-dt text-muted">{{ $term }}</dt>
                    <dd class="m-0 text-right text-[12px] text-ink">{{ $value }}</dd>
                </div>
            @endforeach
        </dl>
    </section>

    <section class="border-t border-ink">
        <div class="mx-auto max-w-[1240px] px-10 pt-14 pb-22 tab:px-6 mob:px-4">
            <div class="mb-12 flex items-baseline justify-between gap-6">
                <h2 class="mono-label text-ink">Services</h2>
                <span class="font-mono text-[11px] tracking-[0.12em] text-muted">Four things, done properly</span>
            </div>

            <div>
                @foreach ($services as $service)
                    <article class="grid grid-cols-[64px_minmax(0,3fr)_minmax(0,4fr)] gap-10 border-t border-hairline py-8 last:border-b hover:bg-band tab:block tab:py-[26px]">
                        <div class="mono-num pt-2 text-muted tab:mb-[10px] tab:pt-0">{{ $service['number'] }}</div>
                        <h3 class="text-[32px] leading-[1.1] font-semibold tracking-[-0.025em] text-ink tab:text-[26px] mob:text-[22px]">{{ $service['title'] }}</h3>
                        <p class="pt-1.5 text-[16px] leading-[1.6] text-pretty text-body tab:pt-3">{{ $service['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-t border-ink bg-band">
        <div class="mx-auto max-w-[1240px] px-10 pt-14 pb-22 tab:px-6 mob:px-4">
            <div class="mb-12 flex items-baseline justify-between gap-6">
                <h2 class="mono-label text-ink">Shipped</h2>
                <span class="font-mono text-[11px] tracking-[0.12em] text-muted">Our own products</span>
            </div>

            <div class="grid grid-cols-[minmax(0,1fr)_300px] items-start gap-14 border-t border-hairline pt-9 tab:grid-cols-1 tab:gap-10">
                <div>
                    <h3 class="text-[44px] leading-[1.02] font-semibold tracking-[-0.03em] text-ink tab:text-[34px] mob:text-[28px]">Tensen</h3>
                    <p class="mono-num mt-3 text-[12px] uppercase text-muted">Dream Journal</p>
                    <p class="mt-7 max-w-[520px] text-[17px] leading-[1.6] text-pretty text-body">A dream journal with an AI interpreter attached: log what you dreamt, get a personal reading, and watch the patterns and recurring symbols build up over months. Guided programs and lucid dreaming practices on top.</p>

                    <div class="mt-9 border-t border-hairline">
                        <div class="flex items-center justify-between gap-6 border-b border-hairline py-3.5">
                            <span class="mono-nav text-ink">App Store</span>
                            <a href="https://apps.apple.com/us/app/dream-journal-tensen/id6759192625" target="_blank" rel="noopener" class="tap-44 text-[14px] font-medium text-accent tab:justify-end tab:text-right">Live — view listing ↗</a>
                        </div>
                        <div class="flex items-center justify-between gap-6 border-b border-hairline py-3.5">
                            <span class="mono-nav text-ink">Google Play</span>
                            <a href="https://play.google.com/store/apps/details?id=com.newtechbuilders.tensen" target="_blank" rel="noopener" class="tap-44 text-[14px] font-medium text-accent tab:justify-end tab:text-right">Live — view listing ↗</a>
                        </div>
                    </div>
                </div>

                <figure class="m-0 tab:max-w-[280px] mob:max-w-none">
                    <div class="relative aspect-[9/16] w-full overflow-hidden border border-hairline bg-ink">
                        <video src="{{ asset('video/tensen-preview.mp4') }}"
                               poster="{{ asset('video/tensen-preview.jpg') }}"
                               autoplay muted loop playsinline controls preload="metadata"
                               class="block h-full w-full bg-ink object-cover"></video>
                    </div>
                    <figcaption class="mono-cap mt-2.5 text-muted">Tensen — App Store preview</figcaption>
                </figure>
            </div>

            @foreach ($products as $product)
                <div class="mt-14 grid grid-cols-[minmax(0,1fr)_300px] items-start gap-14 border-t border-hairline pt-9 tab:grid-cols-1 tab:gap-10">
                    <div>
                        <h3 class="text-[44px] leading-[1.02] font-semibold tracking-[-0.03em] text-ink tab:text-[34px] mob:text-[28px]">{{ $product['name'] }}</h3>
                        <p class="mt-7 max-w-[520px] text-[17px] leading-[1.6] text-pretty text-body">{{ $product['copy'] }}</p>

                        <div class="mt-9 border-t border-hairline">
                            <div class="flex items-center justify-between gap-6 border-b border-hairline py-3.5">
                                <span class="mono-nav text-ink">{{ $product['domain'] }}</span>
                                <a href="{{ $product['url'] }}" target="_blank" rel="noopener" class="tap-44 text-[14px] font-medium text-accent tab:justify-end tab:text-right">Live — visit site ↗</a>
                            </div>
                        </div>
                    </div>

                    <figure class="m-0 tab:max-w-[280px] mob:max-w-none">
                        <div class="relative aspect-[9/16] w-full overflow-hidden border border-hairline bg-band">
                            @if (file_exists(public_path($product['image'])))
                                <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}" class="block h-full w-full object-cover">
                            @endif
                        </div>
                        <figcaption class="mono-cap mt-2.5 text-muted">{{ $product['name'] }} — screenshot</figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
    </section>

    <section class="border-t border-ink">
        <div class="mx-auto grid max-w-[1240px] grid-cols-[64px_minmax(0,1fr)] gap-10 px-10 pt-14 pb-24 tab:grid-cols-1 tab:gap-5 tab:px-6 tab:pt-12 tab:pb-18 mob:px-4 mob:pt-10 mob:pb-16">
            <div class="mono-label pt-3.5 text-ink">Contact</div>
            <div>
                <a href="mailto:info@new-tech-builders.com" class="tap-44-inline inline-block text-[52px] leading-[1.05] font-semibold tracking-[-0.03em] text-ink underline decoration-hairline decoration-2 underline-offset-[6px] hover:text-accent hover:decoration-accent tab:text-[30px] tab:break-words mob:text-[22px]">info@new-tech-builders.com</a>
                <p class="mt-7 max-w-[520px] text-[16px] leading-[1.6] text-body">One inbox, read by the people who would do the work. Include what you are building and roughly when you need it live.</p>
            </div>
        </div>
    </section>
</x-layouts.app>
