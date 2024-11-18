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

        @foreach ($allPosts as $post )
        <tr>
            <th scope="row"> {{$post->id}} </th>
            <td> {{ $post->title }} </td>
            <td> {{ $post->user->name }} </td>
            <td> {{ $post->created_at->format('Y-M-d -- l') }} </td>
            <td>
                <a href="{{route('posts.show', $post->id )}}" class="btn btn-info"> View </a>
                <a href="{{route('posts.edit', $post->id )}}" class="btn btn-primary"> Edit </a>

                <form style=" display: inline; " method="post" action="{{route('posts.destroy', $post->id)}}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"> Delete </button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection