<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() 
    {
        return view("home"); // retourne home.blade.php
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,gif,png,bmp'
        ]);
        $file = $request->file('file');
        $name = time().$file->getClientOriginalName();
        $file->move('uploads', $name);
        //stockage en BDD
        Gallery::create([
            'file' => '/uploads/'.$name
        ]);
        return "Images envoyées avec succès !";
    }

    public function show() 
    {   
        $galleries = Gallery::get();
        return view('gallery', compact('galleries'));
    }
}
