@extends('layouts.app')

@section('title' , 'Contact Page')

@section('content')

<!-- Wrapper container -->
<div class="container py-4">

    <!-- Bootstrap 5 starter form -->
    <form id="contactForm" method="post" action="abc">
        @csrf
  
      <!-- Name input -->
      <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" name="name" type="text" placeholder="Name" />
      </div>
  
      <!-- Email address input -->
      <div class="mb-3">
        <label class="form-label" for="emailAddress">Email Address</label>
        <input class="form-control" id="emailAddress" name="email" type="email" placeholder="Email Address" />
      </div>
  
      <!-- Message input -->
      <div class="mb-3">
        <label class="form-label" for="message">Message</label>
        <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
      </div>
  
      <!-- Form submit button -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
      </div>
  
    </form>
  
  </div>


  @endsection