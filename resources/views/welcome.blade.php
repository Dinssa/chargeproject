@extends('main')

@section('title', 'Bringing affordable & renewable electricity to Bangladesh')
@section('page', 'home')

@section('og_meta')
	<meta property="og:title" content="Charge Project | Bringing affordable & renewable electricity to Bangladesh" />
	<meta property="og:url" content="https://www.chargeproject.org" />
    <meta property="og:author" content="Emanuel Dinssa | https://www.linkedin.com/in/dinssa/ | edinssa98@gmail.com" />
	<meta property="og:image" content="{{url('/imgs/about-banner.jpg')}}" />
	<meta property="og:description" content="We’re utilising a mobile and highly accessible network of boats to transport renewable, clean and affordable electricity to the most impoverished families in Bandladesh." />
@endsection

@section('banner')

    <div class="col-md-8 col-lg-8 col-xl-6 align-self-center bg-t-purple main-banner">

        <h1>POWERING THE CHARS</h1>

        <p class="mt-4">The Charge Project provides a sustainable solution to a key issue facing communities in the Char region of Bangladesh. The constant threat of flooding means that permanent electrical infrastructure is impossible, leading to poor social connectivity amongst the river islands.</p>

        <p class="mt-4">As a result, this region is the home of an ultra-poor communitsy, in which residents struggle to access, or afford electricity. Their only source of affordable light and heat comes from the use of kerosene lamps, which produces carcinogens.</p>

        <p class="mt-4" >Our enterprise tackles this issue by equipping transport boats with solar panels that charge battery boxes, which are then rented out to locals on a daily basis.</p>

    </div>
@endsection

{{--@section('banner')--}}
    {{--<video poster="imgs/home-still.jpg" id="bgvid" playsinline autoplay muted loop>--}}
        {{--<source src="imgs/chargehomelow.webm" type="video/webm"><source src="imgs/homeadaptlow.mp4" type="video/mp4">--}}
    {{--</video>--}}

	{{--<div class="col-md-8 col-lg-8 col-xl-6 align-self-center bg-t-purple main-banner">--}}

		{{--<h1>POWERING THE CHARS</h1>--}}

        {{--<p class="mt-4">The Charge Project provides a sustainable solution to a key issue facing communities in the Char region of Bangladesh. The constant threat of flooding means that permanent electrical infrastructure is impossible, leading to poor social connectivity amongst the river islands.</p>--}}

        {{--<p class="mt-4">As a result, this region is the home of an ultra-poor community, in which residents struggle to access, or afford electricity. Their only source of affordable light and heat comes from the use of kerosene lamps, which produces carcinogens.</p>--}}

        {{--<p class="mt-4" >Our enterprise tackles this issue by equipping transport boats with solar panels that charge battery boxes, which are then rented out to locals on a daily basis.</p>--}}

	{{--</div>--}}
{{--@endsection--}}

{{--@section('banner')--}}

    {{--<div id="videoDiv">--}}
        {{--<div id="videoBlock">--}}
            {{--<video poster="imgs/home-still.jpg" id="bgvid" playsinline autoplay muted loop>--}}
                {{--<source src="imgs/chargehomelow.webm" type="video/webm"><source src="imgs/homeadaptlow.mp4" type="video/mp4">--}}
            {{--</video>--}}
            {{--<div id="videoMessage" class="col-md-8 col-lg-8 col-xl-6 align-self-center bg-t-purple main-banner">--}}
                {{--<h1>POWERING THE CHARS</h1>--}}

                {{--<p class="mt-4">The Charge Project provides a sustainable solution to a key issue facing communities in the Char region of Bangladesh. The constant threat of flooding means that permanent electrical infrastructure is impossible, leading to poor social connectivity amongst the river islands.</p>--}}

                {{--<p class="mt-4">As a result, this region is the home of an ultra-poor community, in which residents struggle to access, or afford electricity. Their only source of affordable light and heat comes from the use of kerosene lamps, which produces carcinogens.</p>--}}

                {{--<p class="mt-4" >Our enterprise tackles this issue by equipping transport boats with solar panels that charge battery boxes, which are then rented out to locals on a daily basis.</p>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--@endsection--}}

@section('content')
    <div class="container-fluid bg-l-grey home-what-we-do">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h5 class="tiny-title">MISSION STATEMENT</h5>
					<h3 class="text-d-purple">WE’RE UTILISING A MOBILE AND HIGHLY ACCESSIBLE NETWORK OF BOATS TO TRANSPORT RENEWABLE, CLEAN AND AFFORDABLE ELECTRICITY TO THE MOST IMPOVERISHED FAMILIES IN THE REGION.</h3>
                    <p>We have partnered with a prominent local NGO, academics of socio-economics and innovative engineering students at a local university. Our project not only changes the livelihoods of residents but also strives towards clean energy by powering our boats through the solar panels through the research and innovation of our partnership teams.</p>
                </div>
			</div>
			<div class="row">
				<div class="col"><a href="{{route('page.about')}}" class="btn btn-dp-yt">WHO WE ARE</a></div>
			</div>
		</div>
	</div>

    <div class="container-fluid bg-d-purple clients-logos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-2">
                    <div class="row align-items-center text-center">
                        <div class="col-5 col-lg-2"> <img class="img-fluid" src="{{url('/imgs/logos/about/enactus-logo.png')}}" alt="Enactus Southampton"> </div>
                        <div class="col-5 col-lg-2"> <img class="img-fluid" src="{{url('/imgs/logos/about/uni-white.png')}}" alt="University of Southampton"> </div>
                        <div class="col-5 col-lg-1"> <img class="img-fluid" src="{{url('/imgs/logos/about/ecs-w.png')}}" alt="Electronics and Computer Science"> </div>
                        <div class="col-5 col-lg-2"> <img class="img-fluid" src="{{url('/imgs/logos/about/guklogo-w.png')}}" alt="Gana Unnayan Kendra"> </div>
                        <div class="col-5 col-lg-1"> <img class="img-fluid" src="{{url('/imgs/logos/about/uni-dhaka.png')}}" alt="University of Dhaka"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--Boats explanation module--}}

    {{--@include('partials._learnmore_form')--}}



@endsection

@section('scripts')

@endsection
