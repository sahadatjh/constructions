@extends('frontend.layouts.app')
@section('content')
    @include('frontend.layouts.partials.header')
    @include('frontend.sections.cost.breadcrumbs')
    @include('frontend.sections.cost.products-single')
@endsection