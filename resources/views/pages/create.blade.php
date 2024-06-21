@extends('layouts.app')

@section('content')
    <h1>Create Page</h1>
    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
