<x-layouts.app title="New Tech Builders - Building the Future">
    {{-- Hero Section --}}
    <div class="py-12 text-center sm:py-20">
        <flux:heading size="xl" level="1" class="text-4xl! sm:text-5xl! font-bold!">
            Building the Future of Technology
        </flux:heading>
        <flux:text class="mx-auto mt-4 max-w-2xl text-lg">
            New Tech Builders creates innovative software products that empower businesses and individuals. We combine cutting-edge technology with thoughtful design to deliver exceptional experiences.
        </flux:text>
        <div class="mt-8">
            <flux:button variant="primary" icon="envelope" href="mailto:info@new-tech-builders.com">
                Get in Touch
            </flux:button>
        </div>
    </div>

    <flux:separator variant="subtle" />

    {{-- Products Section --}}
    <div class="py-12 sm:py-16">
        <div class="text-center">
            <flux:heading size="lg" level="2">Our Products</flux:heading>
            <flux:text class="mx-auto mt-2 max-w-xl">
                Discover our suite of products designed to solve real-world problems.
            </flux:text>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <flux:card class="space-y-4">
                <div class="flex items-center gap-3">
                    <flux:icon.device-phone-mobile variant="outline" class="size-8 text-zinc-500 dark:text-zinc-400" />
                    <flux:heading size="lg">Mobile Apps</flux:heading>
                </div>
                <flux:text>
                    Native mobile applications for iOS and Android, built with performance and user experience in mind.
                </flux:text>
                <flux:badge color="lime">Coming Soon</flux:badge>
            </flux:card>

            <flux:card class="space-y-4">
                <div class="flex items-center gap-3">
                    <flux:icon.cloud variant="outline" class="size-8 text-zinc-500 dark:text-zinc-400" />
                    <flux:heading size="lg">Cloud Services</flux:heading>
                </div>
                <flux:text>
                    Scalable cloud infrastructure and services that grow with your business needs.
                </flux:text>
                <flux:badge color="sky">In Development</flux:badge>
            </flux:card>

            <flux:card class="space-y-4">
                <div class="flex items-center gap-3">
                    <flux:icon.cpu-chip variant="outline" class="size-8 text-zinc-500 dark:text-zinc-400" />
                    <flux:heading size="lg">AI Solutions</flux:heading>
                </div>
                <flux:text>
                    Intelligent automation and AI-powered tools to streamline your workflows.
                </flux:text>
                <flux:badge color="violet">Exploring</flux:badge>
            </flux:card>
        </div>
    </div>

    <flux:separator variant="subtle" />

    {{-- Contact Section --}}
    <div class="py-12 text-center sm:py-16">
        <flux:heading size="lg" level="2">Contact Us</flux:heading>
        <flux:text class="mx-auto mt-2 max-w-xl">
            Have questions or want to learn more? Reach out to us anytime.
        </flux:text>
        <div class="mt-6">
            <flux:link href="mailto:info@new-tech-builders.com" class="text-lg font-medium">
                info@new-tech-builders.com
            </flux:link>
        </div>
    </div>
</x-layouts.app>
