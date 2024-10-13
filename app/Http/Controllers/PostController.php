<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {

        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'created_by' => 'Mohamed Ehab', 'created_at' => '8/10/2024'],
            ['id' => 2, 'title' => 'SQL', 'created_by' => ' Teama ', 'created_at' => '5/10/2024'],
            ['id' => 3, 'title' => 'Laravel', 'created_by' => 'Mohamed', 'created_at' => '10/10/2024'],
            ['id' => 4, 'title' => 'Docker', 'created_by' => 'Mohamed Ehab Mohamed Teama', 'created_at' => '25/10/2024'],
        ];

        return view('posts.index', ['allPosts' => $allPosts]);
    }


    public function show()
    {

        $selectedPost = [
            'id' => 1,
            'title' => 'PHP',
            'description' => 'Persona Home Page or PHP HyperText Preposser',
            'created_by' => 'Mohamed Ehab',
            'email' => 'mohamed@gmail.com',
            'created_at' => '8/10/2024'
        ];

        return view('posts.show', ['post' => $selectedPost]);
    }
}
