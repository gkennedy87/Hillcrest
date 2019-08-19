@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-3" id="blog-post">
                <p><a href="/posts">Return to Blog</a></p>
                <h1 class="mt-4">{{$post->title}}</h1>
                <p class="lead"><a href="#">Author</a></p>
                <hr>
                <p>Posted on {{$post->created_at}}</p>
                <hr>
                <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>{!!$post->body!!}</p>
                <hr>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit Post</a>
                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
                <hr>
            </div>
            @include('inc.sidebar')
        </div>
    </div>
    @include('inc.footer')
@endsection