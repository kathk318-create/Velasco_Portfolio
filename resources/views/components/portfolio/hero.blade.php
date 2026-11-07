<section id="hero" class="relative flex min-h-screen items-center justify-center overflow-hidden px-5 pt-24 pb-16">
    <div class="relative z-10 mx-auto max-w-4xl text-center">
        <span class="hero-orbital mx-auto mb-8 block" aria-hidden="true"></span>

        <p class="hero-kicker mx-auto mb-6 inline-flex items-center gap-2 rounded-full border border-[#a855f7]/30 bg-[#a855f7]/10 px-4 py-1.5 text-xs tracking-[0.3em] text-[#d8b4fe] uppercase">
            <span class="h-1.5 w-1.5 rounded-full bg-[#c084fc] animate-pulse"></span>
            IT Student &bull; Aspiring IT Professional
        </p>

        <h1 class="hero-title text-balance text-5xl font-bold leading-tight tracking-tight text-[#f5eefe] sm:text-6xl lg:text-7xl">
            I&rsquo;m
            <span class="block bg-gradient-to-br from-[#a78bfa] via-[#d8b4fe] to-[#7c3aed] bg-clip-text text-transparent">
                Kathleen Jhoy N. Velasco
            </span>
        </h1>

        <p class="hero-tagline mx-auto mt-6 max-w-2xl text-base leading-relaxed text-[#a8a0bd] sm:text-lg">
            Bachelor of Science in Information Technology
            <br>
            <span class="text-[#e9d5ff]">Software Development &amp; Networking</span>
        </p>

        <div class="hero-actions mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="#projects" class="btn-primary">View My Work</a>
            <a href="#contact" class="btn-ghost">Get In Touch</a>
            <a href="{{ route('resume.download') }}" class="btn-ghost" download>Download Resume</a>
        </div>

        <a href="#about" class="scroll-hint mt-16 inline-flex flex-col items-center gap-2 text-xs tracking-[0.25em] text-[#7d7590] uppercase transition-colors hover:text-[#c084fc]">
            <span>Scroll</span>
            <span class="scroll-hint-line relative block h-10 w-px bg-gradient-to-b from-[#7d7590] to-transparent" aria-hidden="true"></span>
        </a>
    </div>
</section>