@extends('layouts.layout')
@section('title') Events @endsection
@section('main_content')


    <section id="page-header" class="about-header">
        <h2>#KnowUs </h2>
        <p>Independent project </p>
    </section>

    <section id="blog">
    @foreach($events->chunk(4) as $eventChunk)
            @foreach($eventChunk as $event)

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="{{ $event->imagePath }}" alt="">
                    </div>
                    <div class="blog-details">
                        <h4>{{ $event->title }}</h4>
                        <p>{{ $event->description }}.</p>
                    </div>
                    <h1>{{ $event->time }}</h1>
                </div>
            @endforeach
        @endforeach
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
</section>
    @include('partials.footer')

@endsection
