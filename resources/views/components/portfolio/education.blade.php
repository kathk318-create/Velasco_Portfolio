<section id="education" class="relative mx-auto max-w-6xl px-5 py-24 lg:px-8">
    <div class="reveal-on-scroll">
        <x-portfolio.section-heading eyebrow="Foundations" title="Education" />
    </div>

    <div class="mt-14 grid gap-6 md:grid-cols-2">
        @foreach ([
            (object) [
                'badge' => 'College',
                'title' => 'Bachelor of Science in Information Technology',
                'school' => 'Data Center College of the Philippines Bangued',
                'location' => 'Ubbog Lipcan, Bangued, Abra',
                'period' => '2023 – 2027',
                'description' => 'Currently pursuing a BS in Information Technology with a focus on software development and networking principles.',
            ],
            (object) [
                'badge' => 'High School',
                'title' => 'Junior / Senior High School',
                'school' => 'Dugong National High School',
                'location' => 'Dugong, Abra',
                'period' => '2017 – 2023',
                'description' => 'Completed secondary education, building foundational knowledge in preparation for university studies.',
            ],
        ] as $item)
            <article class="reveal-on-scroll edu-card group relative overflow-hidden rounded-2xl border border-[#2b2440] bg-[#141222] p-8">
                <div class="edu-card-glow absolute inset-0 opacity-0 transition-opacity duration-500 group-hover:opacity-100" aria-hidden="true"></div>

                <div class="relative">
                    <div class="mb-5 flex items-center justify-between">
                        <span class="edu-badge">{{ $item->badge }}</span>
                        <span class="text-xs tracking-wider text-[#7d7590]">{{ $item->period }}</span>
                    </div>

                    <h3 class="text-xl font-semibold tracking-tight text-[#f5eefe]">{{ $item->title }}</h3>
                    <p class="mt-1 text-sm font-medium text-[#c084fc]">{{ $item->school }}</p>
                    <p class="mt-1 text-xs text-[#7d7590]">{{ $item->location }}</p>
                    <p class="mt-4 text-sm leading-relaxed text-[#a8a0bd]">{{ $item->description }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>