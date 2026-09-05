<x-layout>
    <div class="gothic-atmosphere">
        <div class="atmosphere-glow glow-a" aria-hidden="true"></div>
        <div class="atmosphere-glow glow-b" aria-hidden="true"></div>
        <div class="atmosphere-glow glow-c" aria-hidden="true"></div>

        <canvas
            id="particles-canvas"
            class="particles-canvas"
            aria-hidden="true"
            data-theme="gothic"
        ></canvas>

        <x-portfolio.navigation />

        <main id="main" class="relative z-10">
            <x-portfolio.hero />
            <x-portfolio.about />
            <x-portfolio.education />
            <x-portfolio.skills />
            <x-portfolio.certifications />
            <x-portfolio.projects />
            <x-portfolio.contact />
        </main>

        <x-portfolio.footer />
    </div>
</x-layout>