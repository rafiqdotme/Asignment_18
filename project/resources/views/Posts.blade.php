@extends('')


@section('content')

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <p>Category: {{ $post->category->name }}</p>
    @endforeach

@endsection