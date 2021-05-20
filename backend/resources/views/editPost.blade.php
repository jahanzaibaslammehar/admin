@extends('custom.layouts.app')
@section('content')
@include('custom.inc.sidebar')
<main class="main-content mt-1 border-radius-lg">
    @include('custom.inc.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 align="center">Update post</h3>
                <div style="margin: auto; width:60%">
                    <form method="POST" action="{{ route('post.update', $post->id) }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Enter post title">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Post Body">{{ $post->body }}</textarea>
                        </div>
                        <input type="hidden" name="id" value="{{ $post->id }}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                        <input name="_method" type="hidden" value="PUT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection