<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class friend extends Model
{
    use HasFactory;
    protected $primaryKey = "friend_id";

   // public $userid = Auth::user()->user_id;

    //insert friend

    public static function insertFriend($request){
        //raw Sql
        $userid = Auth::user()->user_id;
        DB::insert("INSERT INTO friends(user_id, fullname, emailaddress, nickname, gender, meetat, phonenumber, description, country_id)VALUES(?,?,?,?,?,?,?,?,?)",[$userid, $request->fullname, $request->emailaddress, $request->nickname, $request->gender, $request->meetat, $request->phonenumber, $request->description, $request->country]);

       
    }
    //fetch friends added by 

    public static function getfriends(){
         $userid = Auth::user()->user_id;
        // raw sql
        $result = DB::select('SELECT * FROM friends join countries on friends.country_id = countries.country_id where user_id = ?', [$userid]);

        return $result;
    }

    //fetch specific friend details

    public static function getFriendRecord($id){
        //raw sql
        DB::select("SELECT * FROM friends where friend_id = ?",[$id]);

             //query builder
        $result =DB::table('friends')->where('friend_id',$id)->first();

               // Eloquent ORM OBJECT RELATION MANAGER
            Friend::find($id);

            return $result;


    }

    //update specfic friend record

    public static function updateFriendRecord($id, $req){
/*
        //raw sql

        DB::update("UPDATE friends SET fullname=?, emailaddress=?, nickname=?, gender=?, meetat=?, country_id=?, phonenumber=?, description=? WHERE friend_id=?",[$reg->fullname, $reg->emailaddress, $reg->nickname, $reg->gender, $reg->meetat, $reg->country, $reg->phonenumber, $reg->description, $id]);

        //query builder

        DB::table('friends')
        ->where('friend_id',$id)
        ->update([
            'fullname'=>$req->fullname,
             'emailaddress'=>$req->emailaddress,
              'nickname'=>$req->nickname,
               'gender'=>$req->gender,
                'meetat'=>$req->meetat,
                 'country_id'=>$req->country,
                  'phonenumber'=>$req->phonenumber,
                   'description'=>$req->description
        ]);
        */

        //eloquent orm

        $friend = Friend::find($id);

        $friend->fullname = $req->fullname;
        $friend->emailaddress = $req->emailaddress;
        $friend->nickname = $req->nickname;
        $friend->gender = $req->gender;
        $friend->meetat = $req->meetat;
        $friend->country_id = $req->country;
        $friend->phonenumber = $req->phonenumber;
        $friend->description = $req->description;
        $friend->save();
        

    } 

    // delete friend record

    public static function deleteFriendRecord($id){
        // elequent orm

        $friend = Friend::find($id);
        $friend->delete();
    }   
}
