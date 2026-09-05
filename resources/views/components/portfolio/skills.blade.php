<section id="skills" class="relative mx-auto max-w-6xl px-5 py-24 lg:px-8">
    <div class="reveal-on-scroll">
        <x-portfolio.section-heading eyebrow="Arsenal" title="Technical Skills" />
    </div>

    <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-2">
        @foreach ([
            (object) ['name' => 'Software Development', 'icon' => '⟐', 'description' => 'Academic project experience in designing, developing, and testing software applications.'],
            (object) ['name' => 'Networking Principles', 'icon' => '⇄', 'description' => 'Understanding of network fundamentals, protocols, and infrastructure from coursework.'],
            (object) ['name' => 'Academic Project Experience', 'icon' => '◈', 'description' => 'Hands-on experience from collaborative academic projects and coursework deliverables.'],
            (object) ['name' => 'Technology Adaptability', 'icon' => '⟡', 'description' => 'Quick learner with a strong ability to adapt to new technologies and tools as needed.'],
        ] as $skill)
            <article class="reveal-on-scroll skill-card group relative overflow-hidden rounded-2xl border border-[#2b2440] bg-[#141222] p-7 transition-transform duration-500 hover:-translate-y-1.5">
                <div class="skill-card-glow absolute inset-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100" aria-hidden="true"></div>

                <div class="relative flex items-start gap-4">
                    <span class="skill-icon flex h-12 w-12 shrink-0 items-center justify-center rounded-xl border border-[#4c3a6e] bg-gradient-to-br from-[#3a2d5c] to-[#181226] text-xl text-[#d8b4fe]">
                        {!! $skill->icon !!}
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold tracking-tight text-[#f5eefe]">{{ $skill->name }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-[#8d86a3]">{!! $skill->description !!}</p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>