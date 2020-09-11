@extends('layouts.basic')

@section('title', 'TimeLine - What happened in the world after waking up')

@section('linkname')
    <a class="navbar" href="{{ url('home') }}">Home</a> |
    <a class="navbar" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
@endsection

@section('content')
    <h2>Timeline</h2>

    <i>What happened in the world after waking up</i><br />
    @foreach ($tweets as $tweet)
    <div class="post">
        <a class="username" href="{{ url('home') }}">
            <img width="5%" height="5%" src="{{ url('/image/hot.png') }}">{{ $tweet->content }}
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
    @endforeach

    <br /><br /><i>Every messages from the RTwitter users aroud the world!</i><br />
    @foreach ($tweets as $tweet)
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
    @endforeach

@endsection