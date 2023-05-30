@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.checkout.breadcrumbs')
    @include('frontend.sections.checkout.checkout')
@endsection