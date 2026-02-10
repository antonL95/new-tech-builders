<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'New Tech Builders' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

        @fluxAppearance
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:brand href="{{ route('home') }}" name="New Tech Builders" class="max-lg:hidden" />

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item href="{{ route('home') }}" :current="request()->routeIs('home')">Home</flux:navbar.item>
                <flux:navbar.item href="{{ route('privacy') }}" :current="request()->routeIs('privacy')">Privacy Policy</flux:navbar.item>
                <flux:navbar.item href="{{ route('terms') }}" :current="request()->routeIs('terms')">Terms of Service</flux:navbar.item>
            </flux:navbar>

            <flux:spacer />

            <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode" />
        </flux:header>

        <flux:sidebar sticky collapsible="mobile" class="border-r border-zinc-200 bg-zinc-50 lg:hidden dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.header>
                <flux:sidebar.brand href="{{ route('home') }}" name="New Tech Builders" />
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:sidebar.item icon="home" href="{{ route('home') }}" :current="request()->routeIs('home')">Home</flux:sidebar.item>
                <flux:sidebar.item icon="shield-check" href="{{ route('privacy') }}" :current="request()->routeIs('privacy')">Privacy Policy</flux:sidebar.item>
                <flux:sidebar.item icon="document-text" href="{{ route('terms') }}" :current="request()->routeIs('terms')">Terms of Service</flux:sidebar.item>
            </flux:sidebar.nav>

            <flux:sidebar.spacer />

            <flux:sidebar.nav>
                <flux:sidebar.item icon="envelope" href="mailto:info@new-tech-builders.com">Contact Us</flux:sidebar.item>
            </flux:sidebar.nav>
        </flux:sidebar>

        <flux:main container class="!pb-0">
            {{ $slot }}

            <footer class="-mx-6 mt-12 border-t border-zinc-200 bg-zinc-50 sm:-mx-8 dark:border-zinc-700 dark:bg-zinc-900">
                <div class="mx-auto max-w-7xl px-6 py-8">
                    <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                        <flux:text size="sm">
                            &copy; {{ date('Y') }} New Tech Builders. All rights reserved.
                        </flux:text>

                        <div class="flex items-center gap-4">
                            <flux:link href="mailto:info@new-tech-builders.com" variant="subtle" class="text-sm">info@new-tech-builders.com</flux:link>
                            <flux:separator vertical class="my-1" />
                            <flux:link href="{{ route('privacy') }}" variant="subtle" class="text-sm">Privacy Policy</flux:link>
                            <flux:separator vertical class="my-1" />
                            <flux:link href="{{ route('terms') }}" variant="subtle" class="text-sm">Terms of Service</flux:link>
                        </div>
                    </div>
                </div>
            </footer>
        </flux:main>

        @fluxScripts
    </body>
</html>
