@extends('layouts.layout')
@section('title') Events @endsection
@section('main_content')


    <section id="page-header" class="about-header">
        <h2>#KnowUs </h2>
        <p>Independent project </p>
        </div>
    </section>

    <section id="blog">
    @foreach($events->chunk(4) as $eventChunk)
            @foreach($eventChunk as $event)

                <div class="blog-box">
                    <div class="blog-img">
                        <img src="{{ $event->imagePath }}">
                    </div>
                    <div class="blog-details">
                        <h4>{{ $event->title }}</h4>
                        <p>{{ $event->description }}.</p>
                        <a href="#">More Details</a>
                    </div>
                    <h1>{{ $event->time }}</h1>
                </div>
            @endforeach
        @endforeach


{{--    <div class="blog-box">--}}
{{--        <div class="blog-img">--}}
{{--            <img src="img/soccer.jpg">--}}
{{--        </div>--}}
{{--        <div class="blog-details">--}}
{{--            <h4>Match Day Astana - Aksu</h4>--}}
{{--            <p>Championship of Kazakhstan 2022 in the stadium Astana Arena</p>--}}
{{--            <a href="#">More Details</a>--}}
{{--        </div>--}}
{{--        <h1>19/06</h1>--}}
{{--    </div>--}}
{{--    <div class="blog-box">--}}
{{--        <div class="blog-img">--}}
{{--            <img src="img/movie.jpg">--}}
{{--        </div>--}}
{{--        <div class="blog-details">--}}
{{--            <h4>Movie Night</h4>--}}
{{--            <p>Movie Night in the AITU Auditorium</p>--}}
{{--            <a href="#">More Details</a>--}}
{{--        </div>--}}
{{--        <h1>01/06</h1>--}}
{{--    </div>--}}
{{--    <div class="blog-box">--}}
{{--        <div class="blog-img">--}}
{{--            <img src="img/party.jpg">--}}
{{--        </div>--}}
{{--        <div class="blog-details">--}}
{{--            <h4>Сoncert of the Musician Skryptonite</h4>--}}
{{--            <p>Сoncert, Nur-Sultan, Congress Center</p>--}}
{{--            <a href="#">More Details</a>--}}
{{--        </div>--}}
{{--        <h1>20/08</h1>--}}
{{--    </div>--}}
{{--    <div class="blog-box">--}}
{{--        <div class="blog-img">--}}
{{--            <img src="img\speach.jpg">--}}
{{--        </div>--}}
{{--        <div class="blog-details">--}}
{{--            <h4>The grand premiere of the Silk Road ballet at Astana Ballet</h4>--}}
{{--            <p>The expected premiere of the two-act canvas "Silk Road" (Dance of the World) at the Astana Ballet Theater</p>--}}
{{--            <a href="#">More Details</a>--}}
{{--        </div>--}}
{{--        <h1>18/06</h1>--}}
{{--    </div>--}}
</section>

<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
</section>
    @include('partials.footer')

@endsection
