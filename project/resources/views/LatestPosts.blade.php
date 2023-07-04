@extends('App')


@section('content')

    @foreach ($categories as $category)
        <h2>{{ $category->name }}</h2>

        @if ($category->latestPost)
            <p>Latest Post: {{ $category->latestPost->title }}</p>
            <p>{{ $category->latestPost->content }}</p>
        @else
            <p>No posts found for this category.</p>
        @endif

        <hr>
    @endforeach

@endsection