<nav
    id="site-nav"
    class="site-nav fixed inset-x-0 top-0 z-50 transition-colors duration-500"
>
    <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4 lg:px-8">
        <a href="#hero" class="group flex items-center gap-2 text-lg font-semibold tracking-wide text-[#f3eefc]">
            <span class="gothic-monogram" aria-hidden="true">KV</span>
            <span class="nav-brand">Kathleen</span>
        </a>

        <button
            type="button"
            id="nav-toggle"
            class="nav-toggle relative z-50 flex h-10 w-10 items-center justify-center text-[#e9d5ff] md:hidden"
            aria-label="Toggle navigation menu"
            aria-expanded="false"
            aria-controls="nav-menu"
        >
            <span class="nav-burger" aria-hidden="true"></span>
        </button>

        <a href="{{ route('resume.download') }}" class="nav-link relative text-sm tracking-[0.15em] text-[#c9c2d6] uppercase transition-colors hover:text-[#d8b4fe]" download>Download Resume</a>
            @foreach ([
                'about' => 'About',
                'education' => 'Education',
                'skills' => 'Skills',
                'certifications' => 'Certifications',
                'projects' => 'Projects',
                'contact' => 'Contact',
            ] as $href => $label)
                <li class="nav-item translate-y-2 opacity-0 transition duration-300">
                    <a href="#{{ $href }}" class="nav-link relative text-sm tracking-[0.15em] text-[#c9c2d6] uppercase transition-colors hover:text-[#d8b4fe]">{{ $label }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>