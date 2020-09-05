@extends('layouts.basic')<!--Extend template from basic-->

@section('content')<!--Start generating-->
    <div id="welcomebox">
        <div id="registerbox">
            <h2>Register!</h2>
            <b>Want to try RTwitter? Create an account!</b>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <table>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input id="name" type="text" {{ $errors->has('name') ? ' is-invalid' : '' }} name="name" value="{{ old('name') }}" required>
                        </td>
                    </tr>
                    @if ($errors->has('name'))
                        <span><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                    <tr>
                        <td>Email</td>
                        <td>
                            <input id="email" type="email" {{ $errors->has('email') ? ' is-invalid' : '' }} name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input id="password" type="password" {{ $errors->has('password') ? ' is-invalid' : '' }} name="password" required>
                            @if ($errors->has('password'))
                                <span role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>
                            <input id="password-confirm" type="password" name="password_confirmation" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" name="doit" value="Create an account">
                        </td>
                    </tr>
                </table>
            </form>

            <h2><a class="navbar" href="{{ route('login') }}">Already registered? Login here</a></h2>
        </div>

        <a>Hello! RTwitter is a very simple clone of</a><a class="navbar" href="http://twitter.com"> Twitter & Retwis</a>
        <a>, as a demo for the</a><a class="navbar" href="http://code.google.com/p/redis/"> Redis</a>
        <a> key-value database. Key points:</a>
        <ul>
            <li>
                Redis is a key-value DB, and it and MySQL is the DB used by this application.
                RTwitter will call RedisDB first, and if no data is found, then query from MySQLDB.
            </li>
            <li>
                This application can scale horizontally since there is no point where the whole dataset
                is needed at the same point. With consistent hashing (not implemented in the demo to make it simpler)
                different keys can be stored in different servers.
            </li>
            <li>
                The source code of this application, and a tutorial explaining its design, is available
                <a class="navbar" href="http://code.google.com/p/redis/wiki/TwitterAlikeExample">here</a>.
            </li>
            <li>
                PHP and the Redis server communicate using the PHP Redis library client written by
                Ludovico Mangocavallo and included inside the Redis tar.gz distribution.
            </li>
            <li>
                PHP: The Right Way is an easy-to-read, quick reference for PHP popular coding standards,
                links to authoritative tutorials around the Web and what the contributors consider
                to be best practices at the present time.
            </li>
        </ul>
    </div>
@endsection<!--Stop generating-->