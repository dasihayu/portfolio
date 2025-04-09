@extends('layouts.app')

@section('title', 'Welcome to My Portfolio')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- About Section -->
    @include('components.about')

    <!-- Projects Section -->
    @include('components.projects')

    <!-- Testimonials Section -->
    @include('components.testimonials')

    <!-- Blog Section -->
    @include('components.blog')

    <!-- Contact Section -->
    @include('components.contact')
@endsection
