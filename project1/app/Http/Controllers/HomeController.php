<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['welcome'] = "Welcome to Laravel";
        // echo "Hello!";
        return view('home', $data);
    }

    public function about(){
        $data['welcome'] = "Welcome to About Page";
        return view('about', $data);
    }

    public function contact(){
        $data['welcome'] = "Welcome to Contact Page";
        return view('contact', $data);
    }

    public function store(Request $request){
        // print_r($request);
        echo $request->name;
        echo "<br>";
        echo $request->email;
        echo "<br>";
        echo $request->message;
    }

    public function students(){
        $data['title'] = "This is Students Page";
        $data['welcome'] = "Welcome to Students Page";
        $data['students'] = ["Mizanur Rahman", "Ikbal Hossain", "Mehedi Hassan", "Hasnain Sadid", "Mamun OR Rasid"];
        return view('students', $data);
    }

}
