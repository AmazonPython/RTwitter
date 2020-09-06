@extends('layouts.basic')

@section('title', 'TimeLine - What happened in the world after waking up')

@section('linkname')
    <a class="navbar" href="{{ url('home') }}">Home</a> |
@endsection

@section('content')
    <h2>Timeline</h2>
    <i>Latest registered users (an example of sorted sets)</i><br>
    <?
    //showLastUsers();
    ?>
    <i>Latest 50 messages from users aroud the world!</i><br>
    <?//showUserPosts(-1,0,50);?>
@endsection