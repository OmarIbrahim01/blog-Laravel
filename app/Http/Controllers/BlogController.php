<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{


    function index(){
    	$posts = Post::simplePaginate(2);
    	return view('index')->withPosts($posts);
    }

    function show($slug){
    	$post = Post::findBySlug($slug);
    	return view('show')->withPost($post);
    }

}
