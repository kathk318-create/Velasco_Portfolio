<section id="projects" class="relative mx-auto max-w-6xl px-5 py-24 lg:px-8">
    <div class="reveal-on-scroll text-center">
        <h2 class="text-4xl font-bold tracking-tight text-[#f5eefe] sm:text-5xl">
            I Make Incredible
            <span class="block italic font-serif text-[#a855f7]">Projects</span>
        </h2>
        <p class="mt-4 text-base text-[#8d86a3]">A selection of systems I have developed as part of my coursework.</p>
    </div>

    <div class="mt-14 space-y-10">
        @foreach (config('projects.projects') as $index => $project)
            <article class="reveal-on-scroll rounded-3xl border border-[#2b2440] bg-[#141222] p-8 lg:p-12">
                <div class="grid gap-8 lg:grid-cols-2 lg:items-center">
                    <div class="overflow-hidden rounded-2xl">
                        <img
                            src="{{ asset($project['images'][0] ?? '') }}"
                            alt="{{ $project['title'] }} screenshot"
                            loading="lazy"
                            class="h-full w-full object-cover"
                        >
                    </div>

                    <div class="relative">
                        <span class="pointer-events-none absolute -top-6 right-0 text-8xl font-serif font-bold text-[#2b2440] opacity-40">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <h3 class="relative text-2xl font-bold font-serif text-[#f5eefe]">{{ $project['title'] }}</h3>

                        <span class="mt-3 inline-block rounded-full border border-[#a855f7] bg-[#2a1f45] px-4 py-1 text-xs font-medium text-[#d8b4fe]">
                            {{ $project['tag'] }}
                        </span>

                        <p class="mt-4 text-sm leading-relaxed text-[#8d86a3]">{{ $project['description'] }}</p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <button
                                type="button"
                                class="gallery-trigger inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-[#a855f7] to-[#8b5cf6] px-5 py-3 text-sm font-semibold text-white shadow-[0_0_20px_rgba(168,85,247,0.35)] transition hover:opacity-90"
                                data-images='@json($project["images"])'
                                data-title="{{ $project['title'] }}"
                            >
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0 2 2 0 012.828 0L20 16m-2-2l1.586-1.586a2 2 0 012.828 0L22 14M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                View Gallery
                            </button>

                            <a
                                href="{{ $project['live_url'] }}"
                                target="_blank"
                                rel="noopener"
                                class="inline-flex items-center gap-2 rounded-xl border border-[#a855f7] px-5 py-3 text-sm font-semibold text-[#d8b4fe] transition hover:bg-[#a855f7]/10"
                            >
                                Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

        <div class="reveal-on-scroll text-center">
            <h3 class="text-xl font-semibold text-[#f5eefe]">GitHub Repositories</h3>
            <p class="mt-2 text-sm text-[#8d86a3]">Source code of my personal projects.</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2">
            @foreach (config('projects.github_repos') as $repo)
                <a
                    href="{{ $repo['url'] }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="block rounded-2xl border border-[#2b2440] bg-[#141222] p-6 transition hover:border-[#a855f7] hover:shadow-[0_0_20px_rgba(168,85,247,0.18)]"
                >
                    <div class="flex items-center gap-3">
                        <svg class="h-6 w-6 text-[#d8b4fe]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .5C5.37.5 0 5.87 0 12.5c0 5.3 3.44 9.8 8.21 11.39.6.11.82-.26.82-.58 0-.28-.01-1.02-.02-2.01-3.34.73-4.04-1.61-4.04-1.61-.55-1.39-1.34-1.76-1.34-1.76-1.09-.75.08-.73.08-.73 1.21.08 1.84 1.24 1.84 1.24 1.07 1.84 2.81 1.31 3.5 1 .11-.78.42-1.31.76-1.61-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 013-.41c1.02.005 2.04.138 3 .405 2.28-1.55 3.29-1.23 3.29-1.23.66 1.66.24 2.88.12 3.18.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22 0 1.6-.01 2.89-.01 3.29 0 .32.22.69.82.57A12.01 12.01 0 0024 12.5C24 5.87 18.63.5 12 .5z"/></svg>
                        <h4 class="text-lg font-semibold text-[#f5eefe]">{{ $repo['title'] }}</h4>
                    </div>
                    <p class="mt-3 text-sm text-[#8d86a3]">{{ $repo['description'] }}</p>
                    <span class="mt-4 inline-flex items-center gap-2 rounded-xl border border-[#a855f7] px-5 py-2 text-sm font-semibold text-[#d8b4fe]">
                        View on GitHub
                        <span aria-hidden="true">&#8594;</span>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>

<div id="gallery-modal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/80 p-4" role="dialog" aria-modal="true">
    <button type="button" id="gallery-close" class="absolute top-4 right-4 text-3xl text-white" aria-label="Close">&times;</button>
    <button type="button" id="gallery-prev" class="absolute left-4 top-1/2 -translate-y-1/2 text-4xl text-white" aria-label="Previous">&#10094;</button>
    <img id="gallery-img" src="" alt="" class="max-h-[85vh] max-w-[90vw] rounded-lg shadow-2xl">
    <button type="button" id="gallery-next" class="absolute right-4 top-1/2 -translate-y-1/2 text-4xl text-white" aria-label="Next">&#10095;</button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('gallery-modal');
        const img = document.getElementById('gallery-img');
        let images = [];
        let idx = 0;

        function show() {
            img.src = images[idx];
            img.alt = 'Screenshot ' + (idx + 1);
        }

        document.querySelectorAll('.gallery-trigger').forEach(function (btn) {
            btn.addEventListener('click', function () {
                images = JSON.parse(btn.dataset.images);
                idx = 0;
                show();
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        function close() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        document.getElementById('gallery-close').addEventListener('click', close);
        document.getElementById('gallery-prev').addEventListener('click', function () {
            idx = (idx - 1 + images.length) % images.length;
            show();
        });
        document.getElementById('gallery-next').addEventListener('click', function () {
            idx = (idx + 1) % images.length;
            show();
        });
        modal.addEventListener('click', function (e) {
            if (e.target === modal) close();
        });
        document.addEventListener('keydown', function (e) {
            if (modal.classList.contains('hidden')) return;
            if (e.key === 'Escape') close();
            if (e.key === 'ArrowLeft') { idx = (idx - 1 + images.length) % images.length; show(); }
            if (e.key === 'ArrowRight') { idx = (idx + 1) % images.length; show(); }
        });
    });
</script>
