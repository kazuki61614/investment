<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LikeController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
