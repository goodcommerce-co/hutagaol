@extends('_layouts.master')

@section('content')
    @include('_sections.home.hero')
    @include('_sections.home.intro')
    @include('_sections.home.about')
    @include('_sections.home.profile')
    @include('_sections.home.certificates')
    @include('_sections.home.bio')
    @include('_sections.home.publication')
    @include('_sections.home.testimonials')
    @include('_sections.home.gallery')
@endsection
