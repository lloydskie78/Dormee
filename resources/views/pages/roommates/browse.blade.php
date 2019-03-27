@extends('layouts.app')


@section('content')
<div class="bg-opacity text-white bg-primary" 
    style="background-image:url('{{asset('public/img/bg/group_peeps_2.jpg')}}'); 
    background-position: bottom; 
    height: 300px; 
    background-size: cover; padding: 0;">
    <div class="pt-5 container px-5 bg-opacity" style="width: 100%: height: 100%;">
      <div class="row">
        <div class="col-md-6 text-md-left text-center align-self-center bg-opacitymy-5">
          <h1 class="display-1 pt-5 mt-5">Roommates</h1>
          <p class="lead">Search for the right one.&nbsp;</p>
          <div class="row mt-5">
            <div class="col-md-5 col-6">
              <a href="#">
         
            </div>
            <div class="col-md-5 col-6">
              <a href="#">
                
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" >
          <form class="form-inline">
            <div class="input-group">
            Name
              <input type="text" class="form-control" placeholder="" style="width:100%;">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top portrait" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Jane Lee</h5>
              <p class="card-text">Loves to travel.</p>
              <a href="#" class="btn btn-primary mt-4">View Roommate</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top portrait" src="https://images.pexels.com/photos/774091/pexels-photo-774091.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Kelly Sparks</h5>
              <p class="card-text">A 4th-year BS Engineering student. Likes sports.</p>
              <a href="#" class="btn btn-primary mt-3">View Roommate</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top portrait" src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Heath Cruz</h5>
              <p class="card-text">Hi! I love video games and all sorts of movies.</p>
              <a href="#" class="btn btn-primary mt-3">View Roommate</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop