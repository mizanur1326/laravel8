<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
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

    public function store(Request $req){
        $contact = new ContactModel();

        $messages = [
            'name.required' => 'Enter Your Name',
            'email.required' => 'Enter Your Email',
        ];

        $validate = $req->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:6',
        ], $messages);

        if($validate){
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'message' => $req->message
            ];
        }else{
            echo "Validation Failed";
        }

        // print_r($req);
        $contact->insert($data);
        return redirect('contact')->with('msg', 'Message Inserted Successfully');
    }

    public function messages(){
        $messages = ContactModel::all();
        $data['messages'] = $messages;
        return view('messages', $data);
    }


    public function students(){
        $data['title'] = "This is Students Page";
        $data['welcome'] = "Welcome to Students Page";
        $data['students'] = ["Mizanur Rahman", "Ikbal Hossain", "Mehedi Hassan", "Hasnain Sadid", "Mamun OR Rasid"];
        return view('students', $data);
    }

}
