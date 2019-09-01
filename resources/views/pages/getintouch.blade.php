{{-- Currently page is not used--}}

@extends('main')

@section('title', 'Get In Touch')
@section('page', 'getintouch')
@section('meta_des', 'Bringing affordable & renewable electricity to Bangladesh')


@section('banner')
	<div class="col-md-8 col-lg-8 col-xl-6 align-self-center bg-t-purple">
        <h1>GET IN TOUCH</h1>
        <p>We want to here from you, If you can help develop our technology, support our funding goals or want to partner with us please get in touch!</p>
        <h4 class="text-left"><i class="far fa-envelope-open"></i></i><a href="mailto:info@chargeproject.org" style="color:white;">  info@chargeproject.org</a></h4>
	</div>

@endsection

@section('content')

    {{--Funding goals module --here--}}

    @include('partials._partner_logos')

@endsection
