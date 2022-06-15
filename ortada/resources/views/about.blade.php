@extends('layouts.layout')
@section('title') About @endsection
@section('main_content')



    <section id="page-header" class="about-header">
        <h2>#KnowUs </h2>
        <p>Independent project </p>
        </div>
    </section>



    <section id="about-head" class="section-p1">
        <img src="img/b19.jpg">
        <div>
            <h2>Who We Are?</h2>
            <p>Ortada, a project on a creative basis for future business. We will be engaged in marketing and we want to become an independent brand in the Kazakhstan market..</p>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Search for amazing places with a user-friendly and easy-to-learn interface.</marquee>
        </div>
    </section>
    @include('partials.footer')

@endsection
