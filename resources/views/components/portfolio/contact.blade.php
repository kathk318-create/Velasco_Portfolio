<section id="contact" class="relative mx-auto max-w-6xl px-5 py-24 lg:px-8">
    <div class="reveal-on-scroll">
        <x-portfolio.section-heading eyebrow="Summon Me" title="Contact" />
    </div>

    <div class="mt-14 grid gap-8 lg:grid-cols-2">
        <div class="reveal-on-scroll">
            <p class="text-base leading-relaxed text-[#a8a0bd]">
                Have a project in mind or just want to connect? Feel free to reach out.
                I&rsquo;m always open to new opportunities and collaborations.
            </p>

            <ul class="mt-8 space-y-4 text-sm text-[#c9c2d6]">
                <li class="flex items-center gap-3">
                    <span class="contact-icon flex h-10 w-10 items-center justify-center rounded-lg border border-[#4c3a6e] bg-[#181226] text-[#c084fc]" aria-hidden="true">✉</span>
                    <a href="mailto:kathk318@gmail.com" class="transition-colors hover:text-[#e9d5ff]">kathk318@gmail.com</a>
                </li>
                <li class="flex items-center gap-3">
                    <span class="contact-icon flex h-10 w-10 items-center justify-center rounded-lg border border-[#4c3a6e] bg-[#181226] text-[#c084fc]" aria-hidden="true">☎</span>
                    <a href="tel:09617127025" class="transition-colors hover:text-[#e9d5ff]">0961 712 7025</a>
                </li>
                <li class="flex items-center gap-3">
                    <span class="contact-icon flex h-10 w-10 items-center justify-center rounded-lg border border-[#4c3a6e] bg-[#181226] text-[#c084fc]" aria-hidden="true">◎</span>
                    <span>Salnec, Bucay, Abra</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="contact-icon flex h-10 w-10 items-center justify-center rounded-lg border border-[#4c3a6e] bg-[#181226] text-[#c084fc]" aria-hidden="true">⟁</span>
                    <a
                        href="https://github.com/kathk318-create"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="transition-colors hover:text-[#e9d5ff]"
                    >github.com/kathk318-create</a>
                </li>
            </ul>
        </div>

        <form class="reveal-on-scroll space-y-5" method="post" action="#">
            @csrf
            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label for="name" class="mb-2 block text-xs font-medium tracking-wider text-[#c9c2d6] uppercase">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        placeholder="Your name"
                        class="form-input"
                    >
                </div>
                <div>
                    <label for="email" class="mb-2 block text-xs font-medium tracking-wider text-[#c9c2d6] uppercase">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        placeholder="you@example.com"
                        class="form-input"
                    >
                </div>
            </div>

            <div>
                <label for="message" class="mb-2 block text-xs font-medium tracking-wider text-[#c9c2d6] uppercase">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    required
                    placeholder="Write your message here..."
                    class="form-input resize-none"
                ></textarea>
            </div>

            <button type="submit" class="btn-primary w-full sm:w-auto">Send Message</button>
            <p class="text-xs text-[#7d7590]">This is a visual contact interface. Form submissions are not currently processed.</p>
        </form>
    </div>
</section>