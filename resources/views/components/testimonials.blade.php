<section
    class="py-20 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800 transition-colors duration-300">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 space-y-4">
            <span
                class="inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50/50 dark:bg-blue-900/30 rounded-full border border-blue-100 dark:border-blue-800/50 backdrop-blur-sm">
                Testimonials
            </span>
            <h2
                class="text-4xl font-bold bg-gradient-to-r from-gray-900 via-gray-700 to-gray-900 dark:from-white dark:via-gray-300 dark:to-white bg-clip-text text-transparent">
                What Clients Say
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Feedback from people I've worked with on various projects
            </p>
        </div>
        <!-- Testimonials Slider -->
        <div class="relative mx-auto px-4">
            <!-- Swiper -->
            <div class="swiper testimonialSwiper">
                <div class="swiper-wrapper pb-12">
                    @forelse($testimonials as $testimonial)
                        <div class="swiper-slide p-4">
                            <div
                                class="group bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700 h-full hover:-translate-y-1">
                                <!-- Quote Icon -->
                                <div class="mb-6">
                                    <svg class="w-10 h-10 text-blue-500/20 dark:text-blue-400/20 group-hover:text-blue-500/40 dark:group-hover:text-blue-400/40 transition-colors duration-300"
                                        fill="currentColor" viewBox="0 0 32 32">
                                        <path
                                            d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H6c0-2.2 1.8-4 4-4V8zm18 0c-3.3 0-6 2.7-6 6v10h10V14h-8c0-2.2 1.8-4 4-4V8z" />
                                    </svg>
                                </div>
                                <!-- Content -->
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-6 min-h-[100px] italic">
                                    "{{ is_object($testimonial) ? $testimonial->content : $testimonial['content'] }}"
                                </p>
                                <!-- Rating -->
                                <div class="flex gap-1 mb-6">
                                    @for ($i = 0; $i < (is_object($testimonial) ? $testimonial->rating : $testimonial['rating']); $i++)
                                        <svg class="w-5 h-5 text-yellow-400 group-hover:text-yellow-500 transition-colors duration-300"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endfor
                                </div>
                                <!-- Author -->
                                <div class="flex items-center gap-4">
                                    <img src="{{ is_object($testimonial) ? asset('storage/' . $testimonial->image) : $testimonial['image'] }}"
                                        alt="{{ is_object($testimonial) ? $testimonial->name : $testimonial['name'] }}"
                                        class="w-12 h-12 rounded-full object-cover ring-2 ring-blue-100 dark:ring-blue-900 group-hover:ring-blue-200 dark:group-hover:ring-blue-800 transition-all duration-300">
                                    <div>
                                        <h4 class="font-bold text-gray-900 dark:text-white">
                                            {{ is_object($testimonial) ? $testimonial->name : $testimonial['name'] }}
                                        </h4>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            {{ is_object($testimonial) ? $testimonial->position : $testimonial['position'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <p class="text-gray-500 dark:text-gray-400">No testimonials yet.</p>
                        </div>
                    @endforelse
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div
                class="swiper-button-next after:content-[''] w-14 h-14 -right-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-full shadow-lg hover:shadow-xl border border-gray-100 dark:border-gray-700 flex items-center justify-center transition-all duration-300 hover:scale-105 group">
                <svg class="w-6 h-6 text-gray-800 dark:text-white transition-transform duration-300 group-hover:translate-x-0.5"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
            <div
                class="swiper-button-prev after:content-[''] w-14 h-14 -left-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-full shadow-lg hover:shadow-xl border border-gray-100 dark:border-gray-700 flex items-center justify-center transition-all duration-300 hover:scale-105 group">
                <svg class="w-6 h-6 text-gray-800 dark:text-white transition-transform duration-300 group-hover:-translate-x-0.5"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination !-bottom-2"></div>
        </div>
    </div>
</section>
<script>
    const swiper = new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 32,
        grabCursor: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
    });
</script>
