@extends('layouts.layout')
@section('title') Home @endsection
@section('main_content')



    <br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Control Panel</div>
                    <div class="card-body" style="background-color: white; text-align: center">
                        Welcome to admin dashboard!
                        <br>
                        <br>

                        <a  class="btn btn-primary" style="text-decoration: none" href="{{route('admin-view')}}">Admin Panel</a>

                        <a  class="btn btn-success" style="text-decoration: none" href="{{route('event-view')}}">Event Panel</a>



                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="table-wrap">
            <table class="table table-bordered table-responsive">
                <thead class="table-success">
                <tr style="background-color: white">
                    <td>#</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>City</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr style="background-color: white">
                        <td>{{$user['id']}}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['phone']}}</td>
                        <td>{{$user['city']}}</td>

                        <td>
                            <form action="{{ route('userdestroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <br>


@endsection
