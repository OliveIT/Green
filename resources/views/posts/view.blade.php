@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">View Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-4">
                        <ul class="list-group">
                            @if(count($categories)>0)
                                @foreach($categories->all() as $category)
                                    <li class="list-group-item"><a href='{{url("category/{$category->id}")}}'>{{$category->category}}</a></li>
                                @endforeach
                            @else
                                <p>No Category Found!</p>
                            @endif
                            
                        </ul>               
                    </div>
                     <div class="col-md-8">
                        @if(count($posts) > 0)
                            @foreach($posts->all() as $post)
                                <h4>{{$post->post_title}}</h4>
                                <img src = "{{ $post->post_image }}" alt="">
                                <p>{{ $post->post_body }}</p>
                                <ul class="nav nav-pills">
                                    <li role="presentation">
                                        <a href='{{ url("/like/{$post->id}") }}'>
                                            <span class="fas fa-eye"> Like </span>&nbsp;&nbsp;&nbsp;
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href='{{ url("/dislike/{$post->id}") }}'>
                                            <span class="fa fa-edit"> Dislike </span>&nbsp;&nbsp;&nbsp;
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href='{{ url("/comment/{$post->id}") }}'>
                                            <span class="fa fa-eye"> Comment </span>
                                        </a>
                                    </li>
                                </ul>

                                
                            @endforeach
                        @else
                            <p>No Post Available!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
