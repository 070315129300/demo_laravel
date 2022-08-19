<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index(){
        $title = "my Homepage";

        $students = array(

            array("elon musk", "champ2.jpeg"),
            array("larry page", "champ3.jpeg"),
            array("tim cook", "champ4.jpeg"),
        );

        return view('sites.firstpage',['title'=>$title, 'students'=>$students]);
    }
    public function academy(){
        $address = "5 ogunsiji close, lagos";
        

        return view('sites.school')->with('location', $address);
    }
    public function show($id){
        $fullname = "Tim Cook";
        $dateofbirth = 'July/20/2000';
        $scores = array('JS'=>89, 'CSS'=>99, 'PHP'=>100);

        $title = $fullname."Profile";

        return view('sites.profile', compact('fullname', 'dateofbirth', 'scores', 'title'));
    }
}