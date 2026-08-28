@props(['eyebrow', 'title', 'meta', 'sections'])

<section class="mx-auto max-w-[1240px] px-10 pt-[88px] pb-14 tab:px-6 mob:px-4">
    <div class="mono-eyebrow mb-8 text-muted">{{ $eyebrow }}</div>

    <h1 class="text-[76px] leading-[0.98] font-semibold tracking-[-0.035em] text-ink tab:text-[52px] mob:text-[36px]">{{ $title }}</h1>

    <div class="mono-num mt-8 flex flex-wrap gap-12 uppercase text-muted">
        @foreach ($meta as $item)
            <span>{{ $item }}</span>
        @endforeach
    </div>
</section>

<nav class="mx-auto max-w-[1240px] px-10 pb-[72px] tab:px-6 mob:px-4">
    <div class="grid grid-cols-3 gap-x-12 gap-y-1 border-t border-ink pt-6 tab:grid-cols-2 tab:gap-x-6 mob:grid-cols-1">
        @foreach ($sections as $id => $section)
            <a href="#{{ $id }}" class="tap-44 border-b border-hairline py-[5px] text-[13px] text-body no-underline hover:text-accent tab:py-0">{{ $section['number'] }} &nbsp;{{ $section['toc'] ?? $section['title'] }}</a>
        @endforeach
    </div>
</nav>

<div class="mx-auto max-w-[1240px] px-10 pb-24 tab:px-6 mob:px-4 [&>section:first-child]:border-t-ink [&>section:last-child]:border-b [&>section:last-child]:border-b-ink">
    {{ $slot }}
</div>
