@extends('layouts.layout')
@section('title') Sign In @endsection
@section('main_content')
<body style="
    background: #1abc9c;
    overflow: scroll;">
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Sign in</span></div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{route('user.signin')}}" method="post">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="row button">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                    {{csrf_field()}}
                </div>
                <div class="signup-link">Not a member? <a href="/signup">Signup now</a></div>
            </form>
        </div>
    </div>

@endsection
