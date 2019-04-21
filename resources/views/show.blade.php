@extends('master')

@section('content')
    <h2>{{ $post->title }}</h2>
    {!! $post->text !!}
    <a href="{{route('index')}}">back to all thoughts</a>
@endsection