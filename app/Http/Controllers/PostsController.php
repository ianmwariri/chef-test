<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){

         
        $post = new Post;
        $post->title = $title;
        $post->body = ' this is a test body';
        $post->save();
    }

    public function indexes()
    {
        $title = 'Welcome To La';
        return view('pages/index');
    }

    public function ourstoro(){
        return view('pages/ourstory');
    }

    public function products(){
        return view('pages/products');
    }
}
