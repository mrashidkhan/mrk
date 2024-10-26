@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.bannerbgmain')

    <div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-3">

                    <h1 style="color: #D79B1A; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    @include('partials.contactsection')

@endsection
