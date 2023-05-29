@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.cart.breadcrumbs')
    @include('frontend.sections.cart.cart')
@endsection