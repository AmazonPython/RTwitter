<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //User home
    public function index()
    {
        //If the user is logged in, it will be redirected to here
        $tweets = DB::table('tweets')->get();
        return view('admin/user', ['tweets' => $tweets]);
    }

    //Timeline
    public function timeline()
    {
        //You can see the traces of other people on RTwitter
        $tweets = DB::table('tweets')->get();
        return view('admin/timeline', ['tweets' => $tweets]);
    }

    //Post a new tweet
    public function store(Request $request)
    {
        //A require field in the tweets table, Maximum length 191
        $this->validate($request, [
            'content' => 'required|unique:tweets|max:191'
        ]);

        $tweet = new Tweet;

        $tweet->content = $request->get('content');

        $tweet->user_id = $request->user()->id;

        if ($tweet->save()){

            //If tweets created successfully, redirect to home page
            return redirect('home');
        }else{

            return redirect()->back()->withInput()->withErrors('Post error!');
        }
    }

    //Edit a tweet
    public function edit($id)
    {
        //Get id and redirect to edit page of tweet
        return view('admin/edit')->withTweet(Tweet::find($id));
    }

    public function update(Request $request, $id)
    {
        //Upload data to the database to update selected tweet
        $this->validate($request, [

            'content' => 'required|tweets,content,'.$id.'|max:191'

        ]);

        $tweet = Tweet::find($id);

        $tweet->content = $request->get('content');

        if ($tweet->save()){

            return redirect('home');
        }else{

            return redirect()->back()->withInput()->withErrors('Edit error!');
        }
    }

    //Delete a tweet
    public function destroy($id)
    {
        Tweet::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('Deleted successfully');
    }
}
