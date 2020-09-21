<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addPost(Request $request)
    {
        if (
            $request->has('title') &&
            $request->has('description') &&
            $request->has('text')
        ) {
            $post = new Post();
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->text = $request->input('text');
            $post->save();

            return redirect('/admin/post/add');
        }

        $title = 'Admin';
        return view('admin.add_post', [
            'title' => $title
        ]);
    }

    public function upload(Request $request)
    {
        $path =  public_path().'/images/';
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension() ?: 'png';
        $img = Image::make($file);
        $img->save($path . $filename);

        return response()->json([
            'imageUrl' => asset('public/images/' . $filename)
        ]);
    }

    public function delete(Request $request)
    {
        $src = $request->input('src'); // $src = $_POST['src'];
        $file = explode('/', $src);
        $file_name = public_path() . '/images/' . $file[count($file)-1]; // striping host to get relative path
        if(unlink($file_name))
        {
            return response('success', 200);
        }
        return response('fail', 000);
    }
}
