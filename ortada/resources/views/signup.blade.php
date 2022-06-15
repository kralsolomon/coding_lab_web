@extends('layouts.layout')
@section('title') Sign Up @endsection
@section('main_content')
    <body style="
    background: #1abc9c;
    overflow: scroll;">




    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Sign up</span></div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{route('user.signup')}}" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Name" required>
                </div>

                <div class="row">
                    <i class="fas fa-phone"></i>
                    <input type="text" name="phone" placeholder="Phone" required>
                </div>

                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="row">
                    <i class="fas fa-city"></i>
                    <input type="text" name="city" placeholder="Your city" required>
                </div>
                <div class="row button">
                    <button type="submit"  class="btn btn-primary w-100">Register</button>
                    {{csrf_field()}}
                </div>
                <div class="signup-link">Already have account? <a href="/signin">Sign in</a></div>
            </form>
        </div>
    </div>

@endsection
