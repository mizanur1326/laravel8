@extends('layouts.app')

@section('title' , 'Contact Page')

@section('content')



    <div class="container py-4">
        <h2>Messages List</h2>
        <table style="border: 2px solid green; width:100%" >
            <thead>
                <tr style="border: 1px solid black">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Subject</td>
                    <td>Message</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr style="border: 1px solid black">
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                        <td><i class="fa-solid fa-pen-to-square"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  



  @endsection