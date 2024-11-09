<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{


    public function index()
    {

        // Get all Data From DataBase
        $AllPostsFromDB = Post::all();

        // dd($AllPostsFromDB);

        return view('posts.index', ['allPosts' => $AllPostsFromDB]);
    }


    public function show( Post $post )  // type hinting
    {

        // dd($post);

        // Get Single Post

        // 1-
        // $selectedPost = Post::find($postId);
        
            // To avoid that the data is not existed:
            // 1-
            // $selectedPost = Post::findOrFail($postId);
            // 2-
            // if ( is_null( $selectedPost ) ){
            //     return to_route('posts.index');
            // }

        // 2-
        // $selectedPost = Post::where('id', $postId)->first();

        // 3-
        // $selectedPost = Post::where('id', $postId)->get();
        // dd($selectedPost);

        return view('posts.show', ['post' => $post]);
    }


    public function create() {

        return view('posts.create');
    }


    public function store(){

        // To get data
        // 1-
        $data = request()->all();
        // dd($data);

        // 2-
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        // dd($title, $description, $post_creator);

        return to_route('posts.store');
    }


    public function edit(){

        return view('posts.edit');
    }


    public function update() {

        // Get Data from the form
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        
        // dd($title, $description, $post_creator);

        return to_route('posts.update',1);
    }


    public function destroy() {
        

        return to_route('posts.index');
    }


}
