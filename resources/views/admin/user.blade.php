@extends('layouts.basic')

@section('title', 'RTwitter Account')
@section('content')
    <div id="postform">
        <form method="POST" action="post.php">
            <a>Dear {{ Auth::user()->name }}, what you are doing?</a>
            <br>
            <table>
                <tr>
                    <td>
                        <textarea cols="88" rows="44" name="status"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <input type="submit" name="doit" value="Update">
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
