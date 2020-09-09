@extends('layouts.basic')

@section('title', 'RTwitter Account')

@section('linkname')
    <a class="navbar" href="{{ url('home/timeline') }}">Timeline</a> |
    <a class="navbar" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
@endsection

@section('content')
    <div id="postform">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Input does not meet the requirements.<br><br>
                {!! implode('<br>', $errors->all()) !!}
            </div>
        @endif

        <form method="POST" action="{{ url('home/tweets') }}">
            {!! csrf_field() !!}
            <a>Dear {{ Auth::user()->name }}, what you are doing?</a>
            <br>
            <table>
                <tr>
                    <td>
                        <textarea cols="48" rows="30" name="content" placeholder="A good start is to greet others and be friendly."></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <!--<input type="submit" name="doit" value="Tweet" style="font-size: 18px;">-->
                        <button class="tweet_button">Tweet</button>
                    </td>
                </tr>
            </table>
        </form>

        @foreach ($tweets as $tweet)
        <div class="post">
            <a class="username" href="{{ url('home') }}">
                <strong>{{ Auth::user()->name }}</strong><img width="3%" src="{{ url('/image/crown.png') }}">
                <br /><br />{{ $tweet->content }}{{ $tweet->user_id }}
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

        <div id="homeinfobox">
            followers: <br>
            following: <br>
        </div>
    </div>
@endsection
