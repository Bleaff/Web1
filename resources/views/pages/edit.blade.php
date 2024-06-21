@extends('layouts.app')

@section('content')
    <h1>Edit Page</h1>
    <form action="{{ route('pages.update', $page->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $page->title }}" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required>{{ $page->content }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
