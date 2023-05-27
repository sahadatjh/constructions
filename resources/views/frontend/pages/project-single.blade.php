@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.project.single.breadcrumbs')
    @include('frontend.sections.project.single.project')
    @include('frontend.sections.call-to-action')
@endsection