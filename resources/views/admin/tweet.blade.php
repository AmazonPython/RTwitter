@extends('layouts.basic')

@section('title')

@section('linkname')
    <a class="navbar" href="{{ url('home/timeline') }}">Timeline</a> |
    <a class="navbar" href="{{ url('home/user') }}">User</a>
@endsection

@section('content')
    <div class="post">
        <a class="username" href="{{ url('home') }}">
            <strong>{{ Auth::user()->name }}</strong><img width="3%" src="{{ url('/image/crown.png') }}">
            <br /><br />{{ $tweet->content }}
        </a>
        <br />
        <i>
            {{ $tweet->created_at }}
            <img style="padding-left: 10%" width="4%" src="{{ (url('/image/like.jpg')) }}">
            123456
            <img style="padding-left: 15%" width="4%" src="{{ (url('/image/forward.jpg')) }}">
            123456
            <img style="padding-left: 20%" width="4%" src="{{ (url('/image/reply.png')) }}">
            123456
        </i>
    </div>
@endsection