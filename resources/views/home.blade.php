@extends('layouts.master')

@section('title', 'Page')

@section('content')
    @include('../partials/home/slider')
    @include('../partials/home/feature-top')
    @include('../partials/home/studio')
    {{--@include('../partials/home/stories')--}}
    {{--@include('../partials/home/feature-bottom')--}}
@endsection

@section('app-scripts')

@endsection