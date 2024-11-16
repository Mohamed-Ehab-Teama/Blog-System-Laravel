@extends('layouts.app');

@section('title')
Edit
@endsection



@section('content')

<form method="post" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Title </label>
        <input name="title" type="text" class="form-control" value="{{$post->title}}" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Description </label>
        <textarea name="description" class="form-control" rows="3">{{$post->description}}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Post Creator </label>
        <select name="post_creator" class="form-control">
            @foreach ($users as $user )
            <!-- <option @if($user->id == $post->user_id ) selected @endif value="{{$user->id}}"> {{$user->name}} </option> -->
            <option @selected( $user->id == $post->user_id )  value="{{$user->id}}"> {{$user->name}} </option>
            @endforeach
        </select>
    </div>
    <center>
        <button type="submit" class="btn btn-success mt-3"> Update </button>
    </center>
</form>

@endsection