<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class SiteController extends Controller
{
    public function upload(Request $request)
    {
        // '/uploads/posts/images/'
        $path = $request->input('path');
        $savePath =  public_path() . $path;

        if (!file_exists($savePath)) {
            mkdir($savePath, 0777, true);
        }

        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension() ?: 'png';
        $img = Image::make($file);
        $img->save($savePath . $filename);

        return response()->json([
            'imageUrl' => asset('public' . $path . $filename),
            'serverImageUrl' => 'public' . $path . $filename
        ]);
    }

    public function delete(Request $request)
    {
        $src = $request->input('src');
//        $file = explode('/', $src);
//        array_shift($file);
//        implode("/", $file);
//        $pathToFile = public_path() . "/" . $file;

//        if(unlink($pathToFile))
//        {
//            return response('success', 200);
//        }
        return response()->json([
            'a' => $src
        ]);
    }

    public function getPostMaxId()
    {
        return Post::max('id');
    }
}
