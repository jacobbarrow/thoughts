<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('index');
    }

    public function show(Post $post) {
        return view('show', compact('post'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $post = Post::create([
            'title' => $request->title,
            'text' => $request->text
        ]);


        return redirect(route('show', $post));
    }

    public function edit(Post $post) {
        return view('edit', compact('post'));
    }

    public function update(Post $post, Request $request) {
        $post->title = $request->title;
        $post->text = $request->text;

        $post->save();

        return redirect(route('show', $post));
    }

    public function toggleDraft(Post $post) {
        $post->is_draft = !$post->is_draft;
        $post->save();

        return back();
    }

    public function delete(Post $post) {
        $post->delete();
        return back();
    }
}
