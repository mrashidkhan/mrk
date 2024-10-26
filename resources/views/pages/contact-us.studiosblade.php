@extends('layouts.master')

@section('title', 'Contact Us')

@section('page-title', 'Contact Us')

@section('content')

<!-- Slider Section -->
@include('partials.bannerbgmain')

{{-- <div class="container" >
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-center mb-3">

                <h1 style="color: #D79B1A; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Contact Us</h1>
            </div>
        </div>
    </div>
</div> --}}



<div class="map" style="margin-bottom: 0; padding-bottom: 10px; padding-top: 0;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.5040835696477!2d-96.8884035256264!3d32.911277677114704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c2798885e69c3%3A0x84fe2fe3705eda19!2sMo-labs%20Media!5e0!3m2!1sen!2s!4v1706627779954!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


@endsection
