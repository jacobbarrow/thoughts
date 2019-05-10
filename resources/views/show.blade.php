@extends('master')

@section('content')
    <h2>{{ $post->title }}</h2>
    @if($post->is_draft)
        <b>Post is a draft</b>
    @endif
    {!! $post->text !!}
    <a href="{{route('index')}}">back to all thoughts</a>
@endsection