<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Головна';
        return view('home.index', [
            'title' => $title
        ]);
    }

    public function news()
    {
        $title = 'Новини';
        $posts = Post::all();
        $pageActive = 'active';

        return view('home.news', [
            'title' => $title,
            'posts' => $posts,
            'pageActive' => $pageActive
        ]);
    }

    public function showPost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;

        return view('home.show_post', [
            'title' => $title,
            'post' => $post
        ]);
    }
}
