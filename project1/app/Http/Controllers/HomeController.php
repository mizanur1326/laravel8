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


//Contact Messages
    public function messages(){
        $messages = ContactModel::all();
        $data['messages'] = $messages;
        return view('messages', $data);
    }

    public function delete($mid){
        // echo $mid;

        $message = ContactModel::find($mid);
        if($message->delete()){
            return redirect('messages')->with('msg', 'Message Deleted Successfully');
        }        
    }

    public function edit($mid){
        $message = ContactModel::Find($mid);
        $data['single'] = $message;
        return view('edit', $data);
    }

    public function update(Request $req, $id){
        $contact = ContactModel::Find($id);

        $messages = [
            'name.required' => 'Enter Your Name',
            'email.required' => 'Enter Your Email',
        ];

        $validate = $req->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:6',
        ], $messages);

        if($validate){
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'subject' => $req->subject,
                'message' => $req->message
            ];
        }

        $contact->update($data);
        return redirect('messages')->with('msg', 'Message Update Successfully');
    }


    public function students(){
        $data['title'] = "This is Students Page";
        $data['welcome'] = "Welcome to Students Page";
        $data['students'] = ["Mizanur Rahman", "Ikbal Hossain", "Mehedi Hassan", "Hasnain Sadid", "Mamun OR Rasid"];
        return view('students', $data);
    }

}
