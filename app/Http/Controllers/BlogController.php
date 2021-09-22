<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        // Post::{method} => object untuk mengambil nilai maka dibutuhkan method get()
        $posts = Post::with(['user', 'category'])->take(7)->get();
        return view('layout.secondary', [
            'title' => 'Blog | Personal Project',
            'posts' => $posts
        ]);
    }

    // Route model binding => data dari path URI akan disamakan dengan data model
    public function show(Post $post)
    {
        return view('layout.singlepost', [
            'title' => 'SinglePost | Personal Project',
            'post' => $post
        ]);
    }

    public function allpost()
    {
        $post = Post::paginate(10);
        return view('pages.allpost', [
            'posts' => $post,
            'title' => 'Allpost | Personal Project'
        ]);
    }
}
