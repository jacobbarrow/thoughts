@extends('master')

@section('content')
    <h2>admin</h2>
    <form method="post">
        @csrf
        <label for="title">Title</label>
        <input name="title" id="title" type="text" placeholder="on Some Subject">
        <label for="text">Text</label>
        <textarea name="text" id="text"></textarea>
        <input type="submit">
    </form>
    <h4>Posts</h4>
    <form method="post" action="/some-post">
        <p>on Some Thought <input type="submit" value="Delete"></p>
        <input type="hidden" name="_method" value="DELETE" >
        @csrf
    </form>
@endsection

@section('scripts')
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection