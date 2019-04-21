@extends('master')

@section('content')
    <p>As well as <a href="https://mindful.dev" target="_blank">making websites</a>, from time-to-time I have thoughts. In my opinion ideas are better out than in, so this is where I put them.</p>
    @foreach(App\Post::all() as $post)
        <a href="{{ route('show', $post) }}">
            <article>
                <h3>{{ $post->title }}</h3>
                <span class="date">{{ $post->created_at->format('d/m/y') }}</span>
            </article>
        </a>
    @endforeach
@endsection