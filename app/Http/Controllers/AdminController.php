<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        //User home. If the user is logged in, it will be redirected to here
        return view('admin/user');
    }

    public function timeline()
    {
        //Timeline. You can see the traces of other people on RTwitter
        return view('admin/timeline');
    }

    public function store(Request $request)
    {
        //Post a new tweet
        $this->validate($request, [
            //Require, unique fields in the tweet table, Maximum length 140
            'title' => 'required|unique:articles|max:280'
        ]);

        $tweet = new Tweet;

        $tweet->title = $request->get('title');

        $tweet->user_id = $request->user()->id;

        if ($tweet->save()){
            return redirect('home');
        }else{

            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function edit($id)
    {
        //Redirect to edit page of tweet
        return view('admin/edit');
    }

    public function update(Request $request, $id)
    {
        //Upload data to the database to update selected tweet
        $this->validate($request, [

            'title' => 'required|unique:tweets,title,'.$id.'|max:280',

        ]);

        $tweet = Tweet::find($id);
        $tweet->title = $request->get('title');

        if ($tweet->save()){
            return redirect('admin/tweets');
        }else{

            return redirect()->back()->withInput()->withErrors('编辑失败！');
        }
    }


    public function destroy($id)
    {
        Tweet::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('yes！');
    }
}
