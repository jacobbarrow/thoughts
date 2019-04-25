@extends('master')

@section('content')
    <h2>on editing a post</h2>
    <form method="post">
        @csrf
        <label for="title">Title</label>
        <input name="title" id="title" type="text" value="{{ $post->title }}">
        <label for="text">Text</label>
        <textarea name="text" id="text">{{ $post->text }}</textarea>
        <input type="submit">
    </form>

@endsection

@section('scripts')
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            plugins: 'code link image anchor',
            toolbar: 'undo redo | styleselect | bold code | link image | anchor code'
        });</script>
@endsection