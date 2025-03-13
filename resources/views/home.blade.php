@extends('layouts.app')

@section('title', 'Welcome to My Portfolio')

@section('content')
@include('components.hero')
@include('components.about')
@include('components.projects')
@include('components.contact')
@endsection
