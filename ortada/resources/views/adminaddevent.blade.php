
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

    <div class="container">

    <div class="panel-heading">
        <h3 class="panel-title">Add New Event</h3>
    </div>
    <hr>
    <div class="panel-body">
        <form  class="row" action="{{url('insert-event')}}" method="POST" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="col-mb-3" style="margin-bottom:20px;">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Input Title of the Event">
            </div>


            <div class="col-mb-3" style="margin-bottom:20px;">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="description" placeholder="Add new description!"></textarea>
            </div>


            <div class="col-mb-3" style="margin-bottom:20px;">
                <label for="" class="form-label">Add image path</label>
                <input class="form-control" type="text" name="imagePath" placeholder="Image Path">
            </div>



            <div class="col-mb-3" style="margin-bottom:20px;">
                <label for="description" class="form-label">City</label>
                <input type="text" class="form-control" name="city" placeholder="Put here your city">
            </div>

            <div class="col-mb-3" style="margin-bottom:20px;">
                <label for="description" class="form-label">Time</label>
                <input type="text" class="form-control" name="time" placeholder="Put here your time">
            </div>


            <div class="col-mb-3" style="margin-bottom:20px;">
                <label for="description" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Put here you $price">
            </div>
            <hr>
            <div class="col-sm-offset-3 col-sm-9" style="margin-bottom: 90px;">
                <button type="submit" class="btn btn-success">Add New Event</button>
            </div>
        </form>
    </div>
</div>

@endsection
