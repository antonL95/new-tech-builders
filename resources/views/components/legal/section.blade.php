@props(['sections', 'id'])

@php($section = $sections[$id])

<section id="{{ $id }}" class="grid scroll-mt-20 grid-cols-[64px_minmax(0,760px)] gap-10 border-t border-hairline py-9 tab:grid-cols-[40px_minmax(0,1fr)] tab:gap-5 mob:block mob:py-7">
    <div class="mono-num pt-[7px] text-muted mob:mb-[10px] mob:pt-0">{{ $section['number'] }}</div>

    <div class="legal-prose">
        <h2 class="text-[24px] leading-[1.2] font-semibold tracking-[-0.02em] text-ink">{{ $section['title'] }}</h2>
        {{ $slot }}
    </div>
</section>
