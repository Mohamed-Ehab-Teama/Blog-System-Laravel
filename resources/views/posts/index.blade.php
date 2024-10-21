@extends('layouts.app')


@section('title')
    Index
@endsection


@section('content')



<!-- Create Post Button -->
<div class="container text-center mt-3">
    <a href=" {{ route('posts.create') }} " class="btn btn-success"> Create Post </a>
</div>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted by</th>
            <th scope="col">Created at</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($allPosts as $posts => $post )
        <tr>
            <th scope="row"> {{$post['id']}} </th>
            <td> {{$post['title']}} </td>
            <td> {{$post['created_by']}} </td>
            <td> {{$post['created_at']}} </td>
            <td>
                <a href="{{route('posts.show', $post['id'] )}}" class="btn btn-info"> View </a>
                <a href="{{route('posts.edit', $post['id'])}}" class="btn btn-primary"> Edit </a>
                <a href="#" class="btn btn-danger"> Delete </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection