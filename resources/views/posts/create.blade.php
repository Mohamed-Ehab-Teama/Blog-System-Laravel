@extends('layouts.app')

@section('title') Create @endsection

@section('content')


<form method="POST" action=" {{route('posts.store')}} ">
    @csrf

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Title </label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{old('title')}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Description </label>
        <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label"> Post Creator </label>
        <select name="post_creator" class="form-control">
            @foreach ($users as $user )
                <option value="{{$user->id}}"> {{$user->name}} </option>
            @endforeach
        </select>
    </div>
    <center>
        <button type="submit" class="btn btn-success mt-3"> Create Post </button>
    </center>
</form>



@endsection