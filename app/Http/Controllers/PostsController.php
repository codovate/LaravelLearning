<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

	public function index() {
		
		$posts = Post::orderBy('created_at', 'desc')->get();

		return view('posts.index', compact('posts') );

    }

    public function show(Post $post) {

		return view('posts.show', compact('post') );
    }

    public function create() {

		return view('posts.create');
    }

    public function store() {

    	// Means validate request with this specific rules.
    	$this->validate(request(), [
    		'title' => 'required',
    		'body'	=> 'required'
    	]);

    	//Get Instance of Post Model, Get the request title and body and place it in the post respective variable.
    	Post::create( request(['title', 'body']) );

    	//Create a new post using the request data . saving it to the database and then redirect.
		return redirect('/');


    }


}
