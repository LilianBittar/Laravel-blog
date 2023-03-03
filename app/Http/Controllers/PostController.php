<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $post = new Post (
            array (
                'title' => $request->title,
                'slug' => $request->slug,
                'excerpt' => $request->excerpt,
                'body' => $request->body
            )
            );
            $post->save();
            return view('posts', [
                'posts' => Post::all()
            ]);
    }
}
