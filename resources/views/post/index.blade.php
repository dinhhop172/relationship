@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>List posts</h2>
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('post.create')}}" role="button">Create</a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ten</th>
                        <th scope="col">Mo ta ngan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $loop->index }}</th>
                        <td>{{$post->name}}</td>
                        <td>{{$post->description}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('post.edit', ['id'=>$post->id])}}" role="button">Edit</a>
                            <a class="btn btn-danger" href="{{ route('post.destroy', ['id'=>$post->id]) }}" role="button">Delete</a>
                            <a class="btn btn-primary" href="#" role="button">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
