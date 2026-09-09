<footer class="border-t border-ink bg-band">
    <div class="mx-auto grid max-w-[1240px] grid-cols-[minmax(0,2fr)_minmax(0,1fr)_minmax(0,1fr)_minmax(0,1fr)] gap-12 px-10 pt-12 pb-10 tab:grid-cols-2 tab:gap-8 tab:px-6 tab:pt-10 tab:pb-8 mob:grid-cols-1 mob:gap-7 mob:px-4 mob:pt-9 mob:pb-7">
        <div>
            <div class="mono-label text-ink">New Tech Builders s.r.o.</div>
            <p class="mt-3.5 max-w-[340px] text-[13px] leading-[1.6] text-muted">Software studio registered in the Czech Republic. iOS, Android, AI, and the product work around them.</p>
        </div>

        <div class="flex flex-col gap-2.5 tab:gap-0">
            <div class="mono-dt mb-1 text-muted">Legal</div>
            <a href="{{ route('privacy') }}" class="tap-44 text-[13px] text-body no-underline hover:text-accent">Privacy Policy</a>
            <a href="{{ route('terms') }}" class="tap-44 text-[13px] text-body no-underline hover:text-accent">Terms of Service</a>
            <a href="mailto:info@new-tech-builders.com?subject=Account%20Deletion%20Request" class="tap-44 text-[13px] text-body no-underline hover:text-accent">Account deletion request</a>
        </div>

        <div class="flex flex-col gap-2.5 tab:gap-0">
            <div class="mono-dt mb-1 text-muted">Contact</div>
            <a href="mailto:info@new-tech-builders.com" class="tap-44 text-[13px] text-body no-underline hover:text-accent">info@new-tech-builders.com</a>
        </div>

        <div class="flex flex-col gap-2.5 tab:gap-0">
            <div class="mono-dt mb-1 text-muted">Products</div>
            <a href="https://apps.apple.com/us/app/dream-journal-tensen/id6759192625" target="_blank" rel="noopener" class="tap-44 text-[13px] text-body no-underline hover:text-accent">Tensen on the App Store</a>
            <a href="https://play.google.com/store/apps/details?id=com.newtechbuilders.tensen" target="_blank" rel="noopener" class="tap-44 text-[13px] text-body no-underline hover:text-accent">Tensen on Google Play</a>
            <a href="https://moneysky.app/" target="_blank" rel="noopener" class="tap-44 text-[13px] text-body no-underline hover:text-accent">Moneysky</a>
            <a href="https://promptstor.app/" target="_blank" rel="noopener" class="tap-44 text-[13px] text-body no-underline hover:text-accent">PromptStor</a>
        </div>
    </div>

    <div class="mx-auto max-w-[1240px] px-10 pb-10 tab:px-6 mob:px-4">
        <div class="mono-cap flex flex-wrap justify-between gap-6 border-t border-hairline pt-5 text-muted">
            <span>&copy; {{ date('Y') }} New Tech Builders s.r.o. All rights reserved.</span>
            <span>Prague, Czech Republic</span>
        </div>
    </div>
</footer>
