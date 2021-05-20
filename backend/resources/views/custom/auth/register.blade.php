@extends('custom.layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

             <h3 align="center">Register Form</h3><br>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                <div class="form-group">
                  <label for="confirm-password">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>

@endsection