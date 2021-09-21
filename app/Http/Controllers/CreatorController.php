<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return view('layout.dashboard', [
                'role' => 'Admin'
            ]);
        } else {
            return view('layout.dashboard', [
                'role' => 'creator',
                'post' => Post::all()->where('user_id', auth()->user()->id)
            ]);
        }
    }
}
