@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="container">
        <h1 class="my-4">Gallery</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/photo7.jpg') }}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/photo8.jpg') }}" class="img-fluid" alt="Image 2">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/photo9.jpg') }}" class="img-fluid" alt="Image 3">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/photo4.jpg') }}" class="img-fluid" alt="Image 4">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/photo5.jpg') }}" class="img-fluid" alt="Image 5">
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('images/photo6.jpg') }}" class="img-fluid" alt="Image 6">
            </div>
        </div>
    </div>
@endsection
