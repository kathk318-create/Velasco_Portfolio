<section id="about" class="relative mx-auto max-w-6xl px-5 py-24 lg:px-8">
    <div class="reveal-on-scroll">
        <x-portfolio.section-heading eyebrow="Who I Am" title="About Me" />
    </div>

    <div class="mt-14 grid items-center gap-12 lg:grid-cols-[minmax(0,340px)_1fr] lg:gap-16">
        <div class="reveal-on-scroll profile-frame relative mx-auto w-full max-w-[320px]">
            <div class="gothic-arch relative overflow-hidden">
                <img
                    src="{{ asset('images/kathleen-profile.jpg') }}"
                    alt="Kathleen Jhoy N. Velasco profile photo"
                    class="h-full w-full object-cover"
                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                >
                <div class="profile-placeholder">
                    <span class="profile-placeholder-initials">KV</span>
                    <span class="profile-placeholder-caption">Profile photo coming soon</span>
                </div>
            </div>
        </div>

        <div class="reveal-on-scroll">
            <h3 class="text-2xl font-semibold tracking-tight text-[#f5eefe]">
                Aspiring IT Professional
            </h3>
            <p class="mt-5 text-base leading-relaxed text-[#a8a0bd]">
                Aspiring Information Technology professional with a strong foundation
                in software development, networking principles, and hands-on academic
                project experience. Currently pursuing a Bachelor&rsquo;s Degree in
                Information Technology, adapting quickly to new technologies and eager
                to leverage classroom knowledge into a practical, entry-level role.
            </p>

            <ul class="mt-8 grid gap-3 text-sm text-[#c9c2d6] sm:grid-cols-2">
                <li class="flex items-center gap-3">
                    <span class="gothic-bullet" aria-hidden="true"></span>
                    Name: Kathleen Jhoy N. Velasco
                </li>
                <li class="flex items-center gap-3">
                    <span class="gothic-bullet" aria-hidden="true"></span>
                    Degree: BS in Information Technology
                </li>
                <li class="flex items-center gap-3">
                    <span class="gothic-bullet" aria-hidden="true"></span>
                    Focus: Software Development &amp; Networking
                </li>
                <li class="flex items-center gap-3">
                    <span class="gothic-bullet" aria-hidden="true"></span>
                    Location: Salnec, Bucay, Abra
                </li>
            </ul>
        </div>
    </div>
</section>