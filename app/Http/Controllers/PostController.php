<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

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

        $users = User::all();
        // dd($users);

        
        return view('posts.create', ['users' => $users]);
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

        // Store Syntax 1
            // $post = new Post;
            // $post->title = $title;
            // $post->description = $description;
            // $post->save();

        // Store Syntax 2
            Post::create([
                'title' => $title,
                'description' => $description,
            ]);

        return to_route('posts.store');
    }


    public function edit(Post $post){

        $users = User::all();

        // dd($post);

        return view('posts.edit', [ 'users' => $users, 'post' => $post ]);
    }


    public function update( Post $post ) {

        // Get Data from the form
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;
        // dd($title, $description, $post_creator);
        
        // Get the row
        // dd($post);
        // $post = Post::find($post->id);
        // dd($post);


        // Update the row
        $post->update([
            'title' => $title,
            'description' => $description,
        ]);


        return to_route('posts.update',$post->id);
    }


    public function destroy(Post $post) {
        
        // Get Row
        // dd($post);
        // $post = Post::find($post->id);
        // dd($post);

        // Delete the Row
        $post->delete();

        return to_route('posts.index');
    }


}
