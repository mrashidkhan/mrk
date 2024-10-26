@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.bannerbgmain')
    @include('partials.fashionsection')
    @include('partials.electronicssection')
    @include('partials.jewellerysection')

@endsection
