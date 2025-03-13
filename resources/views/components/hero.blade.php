<section
    class="flex flex-col-reverse md:flex-row items-center justify-between gap-8 md:gap-12 py-8 md:py-16 container mx-auto px-4">
    <!-- Left Section -->
    <div class="flex-1 space-y-4 md:space-y-6 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl leading-tight">
            Hi, I'm Dasi 👋
            <span class="block font-bold mt-2">Fullstack Web Developer</span>
        </h1>
        <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto md:mx-0">
            I help businesses and companies reach their goals by designing & building user-centric digital products and
            experiences. I specialize in creating responsive, fast, and user-friendly websites.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center md:justify-start">
            <button
                class="w-full sm:w-auto px-6 py-3 bg-black text-white font-semibold rounded flex items-center justify-center gap-2 hover:bg-gray-800 transition-colors">
                Let's Talk
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                </svg>
            </button>
            <button
                class="w-full sm:w-auto px-6 py-3 border border-gray-300 rounded font-semibold flex items-center justify-center gap-2 hover:bg-gray-50 transition-colors">
                Download CV
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Right Section -->
    <div class="flex-1 w-full hidden md:block md:max-w-none mx-auto">
        <img src="{{ asset('images/profile.JPG') }}" alt="Profile Image" class="w-full h-auto rounded-lg shadow-lg"
            loading="eager">
    </div>
</section>
