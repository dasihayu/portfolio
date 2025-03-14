@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 md:py-16">
        <div class="text-center space-y-4 mb-8 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold">Get in Touch</h2>
            <div class="w-20 h-1 bg-black mx-auto"></div>
            <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base px-4">
                Have a question or want to work together? Feel free to reach out!
            </p>
        </div>

        <div class="max-w-2xl mx-auto">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                    <input type="text" name="subject" id="subject"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('subject') border-red-500 @enderror"
                        value="{{ old('subject') }}" required>
                    @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                    <textarea name="message" id="message" rows="6"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 @error('message') border-red-500 @enderror"
                        required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                    Send Message
                </button>
            </form>
        </div>
    </div>
@endsection
