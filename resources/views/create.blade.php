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
    @foreach(App\Post::all() as $post)
        <div class="post">
            <a href="{{ route('show', $post) }}">{{ $post->title }}</a>
            <form method="post" action="{{ route('delete', $post) }}">
                @csrf
                <input type="hidden" name="_method" value="DELETE" >
                <input type="submit" value="Delete">
            </form>
            <a href="{{ route('edit', $post) }}">edit</a>
            <form method="post" action="{{ route('toggle_draft', $post) }}">
                @csrf
                <input type="submit" value="{{ $post->is_draft ? 'Make Public' : 'Make Draft' }}">
            </form>
        </div>

    @endforeach

@endsection

@section('scripts')
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            plugins: 'code link image anchor',
            toolbar: 'undo redo | styleselect | bold code | link image | anchor code'
    });</script>
@endsection