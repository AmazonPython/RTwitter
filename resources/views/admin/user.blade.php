@extends('layouts.basic')

@section('title', 'RTwitter Account')

@section('linkname')
    <a class="navbar" href="{{ url('home/timeline') }}">Timeline</a> |
@endsection

@section('content')
    <div id="postform">
        <form method="POST" action="post.php">
            <a>Dear {{ Auth::user()->name }}, what you are doing?</a>
            <br>
            <table>
                <tr>
                    <td>
                        <textarea cols="48" rows="30" name="status" placeholder="A good start is to greet others and be friendly."></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" name="doit" value="Tweet" style="font-size: 18px;">
                    </td>
                </tr>
            </table>
        </form>
        <div id="homeinfobox">
            followers: <br>
            following: <br>
        </div>
    </div>
@endsection
