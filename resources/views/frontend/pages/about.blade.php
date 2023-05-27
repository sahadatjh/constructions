@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.about.about-us-breadcrumbs')
    @include('frontend.sections.who-we-are  ')
    @include('frontend.sections.about.skillbar')
    @include('frontend.sections.contact')
    @include('frontend.sections.call-to-action')
@endsection