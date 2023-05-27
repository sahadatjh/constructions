@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.blog.breadcrumbs-single')
    @include('frontend.sections.blog.single')
@endsection