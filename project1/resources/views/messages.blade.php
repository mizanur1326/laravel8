@extends('layouts.app')

@section('title' , 'Contact Page')

@section('content')



    <div class="container py-4">
        <h2>Messages List</h2>
        @if(session('msg'))
            <div class="alert alert-danger">{{session('msg')}}</div>
        @endif
            
        <table class="table table-striped table-bordered" >
            <thead>
                <tr>
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
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->subject}}</td>
                        <td>{{$message->message}}</td>
                        <td><a href="messages/edit/{{$message->id}}"><button class="btn btn-primary">Edit</button></a> <a href="messages/delete/{{$message->id}}"><button class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  



  @endsection