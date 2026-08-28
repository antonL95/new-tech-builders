<header class="sticky top-0 z-20 border-b border-ink bg-paper">
    <div class="mx-auto flex h-16 max-w-[1240px] items-center gap-10 px-10 tab:gap-5 tab:px-6 mob:h-auto mob:flex-wrap mob:gap-2 mob:px-4 mob:pt-3 mob:pb-0">
        <a href="{{ route('home') }}" class="mono-label tap-44 whitespace-nowrap text-ink no-underline">New Tech Builders</a>

        <div class="flex-1"></div>

        <nav class="flex items-center gap-7 tab:gap-[18px] mob:mt-[10px] mob:w-full mob:justify-between mob:gap-0 mob:border-t mob:border-hairline">
            @foreach ([['Index', 'home'], ['Privacy', 'privacy'], ['Terms', 'terms']] as [$label, $routeName])
                <a href="{{ route($routeName) }}"
                   class="mono-nav tap-44 no-underline hover:text-ink {{ request()->routeIs($routeName) ? 'text-ink' : 'text-muted' }}">{{ $label }}</a>
            @endforeach

            <a href="mailto:info@new-tech-builders.com"
               class="mono-nav tap-44 text-accent underline decoration-accent decoration-1 underline-offset-4 hover:text-ink hover:decoration-ink">Contact</a>
        </nav>
    </div>
</header>
