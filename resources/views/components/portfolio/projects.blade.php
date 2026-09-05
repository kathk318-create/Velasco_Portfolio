<section id="projects" class="relative mx-auto max-w-6xl px-5 py-24 lg:px-8">
    <div class="reveal-on-scroll">
        <x-portfolio.section-heading eyebrow="Creations" title="Projects" />
    </div>

    <div class="mt-14 grid gap-6 md:grid-cols-2">
        @foreach ([
            (object) [
                'title' => 'KathleenVelasco.github.io',
                'description' => 'Personal GitHub project showcasing web development work and technical growth.',
                'url' => 'https://github.com/kathk318-create/KathleenVelasco.github.io.git',
                'tags' => ['GitHub', 'Web Development'],
            ],
            (object) [
                'title' => 'My Portfolio',
                'description' => 'Personal portfolio website project — a developer portfolio built with Laravel.',
                'url' => 'https://github.com/kathk318-create/MyPortfolio.git',
                'tags' => ['Laravel', 'Portfolio'],
            ],
        ] as $project)
            <article class="reveal-on-scroll project-card group relative overflow-hidden rounded-2xl border border-[#2b2440] bg-[#141222] transition-transform duration-500 hover:-translate-y-1.5">
                <div class="project-banner relative flex aspect-[16/10] items-center justify-center overflow-hidden bg-gradient-to-br from-[#2a1f45] via-[#1a1430] to-[#0f0c1a]">
                    <div class="project-banner-glow absolute inset-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100" aria-hidden="true"></div>
                    <span class="project-glyph text-4xl text-[#5a4d82] transition-colors duration-500 group-hover:text-[#c084fc]" aria-hidden="true">❖</span>
                    <span class="absolute inset-0 border border-[#c084fc]/0 transition-colors duration-500 group-hover:border-[#c084fc]/40"></span>
                </div>

                <div class="relative p-7">
                    <h3 class="text-lg font-semibold tracking-tight text-[#f5eefe] transition-colors duration-300 group-hover:text-[#d8b4fe]">{{ $project->title }}</h3>
                    <p class="mt-3 text-sm leading-relaxed text-[#8d86a3]">{{ $project->description }}</p>

                    <div class="mt-5 flex flex-wrap gap-2">
                        @foreach ($project->tags as $tag)
                            <span class="project-tag">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <a
                        href="{{ $project->url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-[#c084fc] transition-colors hover:text-[#e9d5ff]"
                        aria-label="View {{ $project->title }} on GitHub"
                    >
                        View on GitHub
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</section>