
@extends('layouts.layout')
@section('title') Home @endsection
@section('main_content')

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


     <div class="container" style="margin-top: 15px;">
    <h1 class="display-5">Events </h1>
    <hr>
         <br>
    <div>
        <a class="btn btn-warning" style="text-decoration: none" href="{{route('addevent')}}">Add new event</a>
    </div>

    @if(session()->get('success'))
        <br>
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <br>

</div>
<div class="container" style="margin-top: -150px;">
    <table class="table table-striped table-bordered">
        <thead class="table-success">
        <tr style="background-color: white">
            <td>#</td>
            <td>Image Path</td>
            <td>Title</td>
            <td>Description</td>
            <td>City</td>
            <td>Time</td>
            <td>Price</td>
            <td colspan = 2>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr style="background-color: white">
                <td>{{$event['id']}}</td>
                <td>{{$event['imagePath']}}</td>
                <td>{{$event['title']}}</td>
                <td>{{$event['description']}}</td>
                <td>{{$event['city']}}</td>
                <td>{{$event['time']}}</td>
                <td>${{$event['price']}}</td>
                <td>
                    <form action="{{ route('eventdestroy', $event->id)}}" method="post">
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


<br>

<br>



@endsection
