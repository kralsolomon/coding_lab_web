@extends('layouts.layout')
@section('title') Home @endsection
@section('main_content')

        <div id="top">
        <h1 style="font-size: 2em !important; color: white; font-weight: bold;">Ortada</h1>
        <h3 style="font-size: 1.17em; font-weight: bold;" >always in the center of events!</h3>
    </div>
    <div id="main">
        <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
            <h2>We will help you to be in the center of events</h2>
            <span>Bad Mood Killer</span>
        </div>
        <div class="col-sm-6">
            <span>What is Ortada?</span>
            <span>Ortada is an interest-based application to help assignevents, attract people and invite users to a meeting.</span>
        </div>
        </div>
    </div>

    <div id="skills">
        <h2 style="font-size: 3em !important; color: white; font-weight: bold;">Opportunities</h2>
        <h4 style="font-size: 1.17em; color: white; font-weight: bold;"> It's easier with us</h4>

        <div class="image">
            <a href="/events"><img src="img/events.jpg" alt=""></a>
            <a href="/events"><span>Participate in events</span></a>
        </div>

        <div class="image">
            <a href="/signup"><img src="img/create.jpg" alt=""></a>
            <a href="/signup"><span>Publish your events</span></a>
        </div>
    </div>

    <div class="wrapper1">
        <div class="single-price">
            <h1>Military police</h1>
            <div class="price">
                <h2>$5</h2>
            </div>
            <div class="deals">
                <h4>1 post</h4>
                <!--             <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4> -->
            </div>
            <a href="#">select</a>
        </div>
        <div class="single-price">
            <h1>Garrison</h1>
            <div class="price">
                <h2>$10</h2>
            </div>
            <div class="deals">
                <h4>3 posts</h4>
                <!--             <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4> -->
            </div>
            <a href="#">select</a>
        </div>
        <div class="single-price">
            <h1>Intelligence corps</h1>
            <div class="price">
                <h2>$25</h2>
            </div>
            <div class="deals">
                <h4>10 posts</h4>
                <!--             <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4>
                            <h4>lorem ipsum dolor</h4> -->
            </div>
            <a href="#">select</a>
        </div>
    </div>




@endsection
