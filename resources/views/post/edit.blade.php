@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit a post</h2>
        </div>
        <div class="col-md-8">
            <form action="{{route('post.update', ['id'=>$post->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" value="{{$post->name}}" class="form-control" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3" name="description">{{$post->description}} </textarea>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    @php
                    $comments = $post->comments;
                    @endphp
                    @if (!$comments->isEmpty())
                    @foreach ($comments as $comment)
                    <p style="color: red;">{{ $comment->content }}</p>
                    @endforeach
                    @endif
                    <textarea class="form-control" rows="3" name="comment"></textarea>
                </div>
                <div class="form-group">
                    @php
                    $tagsSelected = $post->tags()->pluck('tags.id');
                    @endphp

                    <select multiple class="form-control" name="tag[]">
                        @foreach ($tags as $tag)
                        <option {{ ($tagsSelected->contains($tag->id) ? 'selected' : '') }} value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
