@extends('master')

@section('title', 'View Blog')

@section('content')


    @foreach($blogs as $blog)

    <div class="main">
        <div class="image">
            <img src="{{ asset('upload/'.$blog->image_path) }}">
        </div>
        <div class="data">
            <div class="title">
                {{  $blog->title }}
            </div>
            <div class="display">
                {{ $blog->description }}
            </div>
        </div>
    </div>
    @endforeach

    <div class="comments">
        <form action="{{ url('insertComment/'.$article_id) }}" method="post">
            <label>Add Your Comments:</label><br>
            <textarea name="comment" cols="70" rows="10" ></textarea><br>
            <input type="submit" value="Post" >
            <input type="button" value="Cancel" onclick="window.location='{{URL::action('blogController@index')}}'">
        </form>
    </div>

    @foreach ($comment as $com)
    <div id='sty'>
        <div id='nameid'>  {{ $com->comment }} </div>
        <div id='msgid' align='right'>  {{ $com->username }}</div>
    </div><br>
   @endforeach

@endsection