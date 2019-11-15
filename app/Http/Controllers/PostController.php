<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller

{
    public function index()
    {
        $posts = Post::all();
        return view('post',compact('posts'));
    }
    
    public function createEvent() {
        return view('create_post');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'tags' => 'required',
        ]);

    	$data = $request->all();
    	$tags = explode(",", $request->tags);


    	$post = Post::create($data);
        $post->tag($tags);


        return redirect('post')->with('success','Post created successfully');
    }
}
