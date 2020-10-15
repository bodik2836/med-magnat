<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $title = 'Admin';
        $pageActive = 'active';
        $posts = Post::all();
        return view('admin.news', [
            'title' => $title,
            'posts' => $posts,
            'pageActive' => $pageActive
        ]);
    }

    public function addPost(Request $request)
    {
        if (
            $request->has('title') &&
            $request->has('description') &&
            $request->has('text') &&
            $request->has('main_image_url')
        ) {
            $post = new Post();
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->text = $request->input('text');
            $post->image = $request->input('main_image_url');
            $post->save();

            return redirect('/admin');
        }

        $title = 'Admin';
        $post_max_id = Post::max('id');
        return view('admin.add_post', [
            'title' => $title,
            'post_max_id' => $post_max_id
        ]);
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        if (
            $request->has('title') &&
            $request->has('description') &&
            $request->has('text') &&
            $request->has('main_image_url')
        ) {
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->text = $request->input('text');
            $post->image = $request->input('main_image_url');
            $post->save();

            return redirect('/admin');
        }

        $title = 'Admin';
        return view('admin.edit_post', [
            'title' => $title,
            'post' => $post
        ]);
    }
}
