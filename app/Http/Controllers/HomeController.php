<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        }


        //display form to upload profile photo

        public function createProfilePhoto(){

            $title = "upload profile picture";
            return view('addprofilephoto', compact('title'));



        }

        public function storeProfilePhoto(Request $request){
           // dd($request);

            //validate photo

            $request->validate([
                'photo' => 'required|max:1048572 |mimes:jpg,gif,png,jpeg'
            ]);

            //upload the file 
            if ($request->hasfile('photo')) {
                $file = $request->file('photo');

                $filename = $file->getClientOriginalName();

                $destination = public_path().'/profilephotos';

                $file->move($destination, $filename);

                //update user table

                $user = user::find(Auth::user()->user_id);
                $user->profilephoto = $filename;
                $user->save();

                //redirct

                return redirect()->route('home');
            }
            }
}
