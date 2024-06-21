@extends('layouts.app')

@section('content')
    <h1>Pages</h1>
    <ul>
        @foreach ($pages as $page)
            <li>
                <a href="{{ route('pages.show', $page->id) }}">{{ $page->title }}</a>
                @auth
                    <a href="{{ route('pages.edit', $page->id) }}">Edit</a>
                    <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endauth
            </li>
        @endforeach
    </ul>
@endsection
