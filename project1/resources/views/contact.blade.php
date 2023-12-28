@extends('layouts.app')

@section('title' , 'Contact Page')

@section('content')

<!-- Wrapper container -->
<div class="container py-4">
  <h2>Contact Page</h2>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
      
  @endif

  @if(session('msg'))
    <div class="alert alert-success">
      {{session('msg')}}
    </div>
  @endif
    <!-- Bootstrap 5 starter form -->
    <form id="contactForm" method="post" action="abc">
        @csrf
  
      <!-- Name input -->
      <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" name="name" value="{{old('name')}}" type="text" placeholder="Name" />
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
  
      <!-- Email address input -->
      <div class="mb-3">
        <label class="form-label" for="emailAddress">Email Address</label>
        <input class="form-control" id="emailAddress" name="email" value="{{old('email')}}" type="email" placeholder="Email Address" />
          @error('email')
           <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
        
      <!-- Subject input -->
      <div class="mb-3">
        <label class="form-label" for="subject">Subject</label>
        <input class="form-control" id="subject" name="subject" value="{{old('subject')}}" type="text" placeholder="Subject" />
          @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
  
      <!-- Message input -->
      <div class="mb-3">
        <label class="form-label" for="message">Message</label>
        <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;">{{old('message')}}</textarea>
          @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
        
      <!-- Division input -->
      {{-- <div class="mb-3">       
        <select class="form-select" name="dropdown" id="">
          <option value="" selected>Select Any Value</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>        
      </div>       --}}
  
      <!-- Form submit button -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
      </div>
  
    </form>
  
  </div>


  @endsection