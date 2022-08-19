<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\country;

use App\Models\Friend;

class FrendyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //list all friends
    public function index(){

        $friends = Friend::getFriends();
        return view('frendy.listfriends', compact('friends'));

    }
    //display add friend form

    public function create(){
        $title = "Add Friend";

        $countries = Country::getCountries();
       // dd($countries);
        //create session variable
        session(['username'=>'spacex']);

        return view('frendy.addfriend', compact('title','countries'));

    }
    //validate save friend details

    public function store(Request $request){

        //dd($request->all());

        //validate

        $request->validate([
            'fullname'=>'required | min:4',
            'emailaddress'=> 'required |email',
            'gender'=> 'required',
            'meetat'=>'required',
            'phonenumber'=>'required',
        ]);
         //call insertfriend method

            Friend::insertFriend($request);

          //create flash session

          $request->session()->flash('success', 'A friend was successfully added!');

          //redirect

          return redirect()->route('allfriends');

    }

    //edit friend details

    public function edit($id){

        $title = "Edit Friend";
        $countries = Country::getCountries();
       $data = Friend::getFriendRecord($id);
      // dd($data);

        return view('frendy.editfriend', compact('id', 'data', 'title', 'countries'));

    }

    //update friend details

    public function update(Request $request, $id){
        //dd($request);
      Friend::updateFriendRecord($id, $request);

        //create
         //create flash session

          $request->session()->flash('success', 'friend was successfully update!');

          //redirect

          return redirect()->route('allfriends');

    }
    //delete friend record

    public function destory($id, Request $request){

        //delete friend
        Friend::deleteFriendRecord($id);

        //create flash session

        $request->session()->flash('success','friend details was successful deleted');

        return true;
    }
}
