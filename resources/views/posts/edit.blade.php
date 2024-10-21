@extends('layouts.app');

@section('title')
Edit
@endsection



@section('content')

    <form method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Title </label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Description </label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Post Creator </label>
            <select name="post_creator" class="form-control">
                <option value="1"> Ahmed </option>
                <option value="2"> Mohamed </option>
            </select>
        </div>
        <center>
            <button type="submit" class="btn btn-success mt-3"> Update </button>
        </center>
    </form>

@endsection