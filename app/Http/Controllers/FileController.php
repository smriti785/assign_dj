<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $path = $request->file("file")->store("txt");
        $file = Storage::get($path);
        $file->save();
        return redirect()->route('upload')->with('success'," Successfully!");
    }
}
