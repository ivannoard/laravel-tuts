<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return view('pages.dashboard-post', [
                'role' => 'Admin'
            ]);
        } else {
            return view('pages.dashboard-post', [
                'role' => 'creator',
                'post' => Post::where('user_id', auth()->user()->id)->take(4)->get()
            ]);
        }
    }
}
