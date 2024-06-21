@extends('layouts.app')

@section('title', 'Feedback')

@section('content')
    <div class="container">
        <h1 class="my-4">Feedback</h1>
        <p>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</p>
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Feedback</button>
        </form>
    </div>
@endsection
