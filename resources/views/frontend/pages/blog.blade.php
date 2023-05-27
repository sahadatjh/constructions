@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.blog.breadcrumbs')
    @include('frontend.sections.blog.blogs')
@endsection