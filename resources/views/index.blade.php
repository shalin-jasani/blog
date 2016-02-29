@extends('master')

@section('title', 'Blog System')

@section('content')

    @foreach($users as $user)
    <div class="main">
        <div class="image">
            <img src="{{ asset('upload/'.$user->image_path) }}">
        </div>
        <div class="data">
            <div class="title">
                <a href="{{ url('viewBlog/'.$user->id) }}">
               {{  $user->title }}</a>
            </div>
            <div class="display">
               {{substr($user->description,0,200)  }}...
            </div>
        </div>
    </div>
    @endforeach
     <div align="center">{!! $users->links() !!}</div>
@endsection