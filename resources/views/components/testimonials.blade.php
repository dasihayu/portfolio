<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16 space-y-4">
            <span class="text-blue-600 font-medium">Testimonials</span>
            <h2 class="text-4xl font-bold text-gray-900">What Clients Say</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Feedback from people I've worked with on various projects
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials as $testimonial)
                <div class="bg-gray-50 rounded-2xl p-8 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="{{ is_object($testimonial) ? asset('storage/' . $testimonial->image) : $testimonial['image'] }}" 
                             alt="{{ is_object($testimonial) ? $testimonial->name : $testimonial['name'] }}" 
                             class="w-16 h-16 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-gray-900">
                                {{ is_object($testimonial) ? $testimonial->name : $testimonial['name'] }}
                            </h4>
                            <p class="text-gray-600">
                                {{ is_object($testimonial) ? $testimonial->position : $testimonial['position'] }}
                            </p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        "{{ is_object($testimonial) ? $testimonial->content : $testimonial['content'] }}"
                    </p>
                    <div class="flex gap-1 mt-4">
                        @for($i = 0; $i < (is_object($testimonial) ? $testimonial->rating : $testimonial['rating']); $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500">No testimonials yet.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>