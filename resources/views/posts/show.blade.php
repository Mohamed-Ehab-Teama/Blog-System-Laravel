@extends('layouts.app')

@section('title')
    Show
@endsection

@section('content')



<div class="card">
    <div class="card-header">
        Post Info
    </div>
    <div class="card-body">
        <h5 class="card-title"> Tilte : {{ $post->title }} </h4>
            <p class="card-text"> Description : {{ $post->description }} </p>
    </div>
</div>
</div>


<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title"> Name: {{ $post->created_by }} </h4>
                <p class="card-text"> Email: {{ $post->email }} </p>
                <p class="card-text"> Created At: {{ $post->created_at }} </p>
        </div>
    </div>
</div>



@endsection