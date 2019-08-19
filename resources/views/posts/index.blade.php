@extends('layouts.app')
@section('content')
    @include('inc.navbar')
    <div class="container">
    <div class="row">
        
    <div class="col-md-8 col-lg-8">
    <h1>Our Blog</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
              <p class="card-text">{!! str_limit($post->body,200,'...')!!}</p>
              <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
             Posted on {{$post->created_at}} by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
  @endif
  </div>
  @include('inc.sidebar')
    
    <!--end row -->
</div>
    <!--end container -->
</div>
@include('inc.footer')
@endsection