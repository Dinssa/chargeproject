@extends('main')

@section('title', 'Funding')
@section('page', 'funding')
@section('meta_des', 'Bringing affordable & renewable electricity to Bangladesh')


@section('banner')
	<div class="col-md-8 col-lg-8 col-xl-6 align-self-center bg-t-purple">
		<h1>WE NEED YOU</h1>
        <p>Our revenue comes from the daily rented battery boxes and offsetting costs of diesel for boat transportation. Currently we can serve 160 customers which generates an income of £4088 from the battery box rental alone. This money is then used to pay our boat workers and re-invested back into the project to upgrade our equipment.</p>
        <p>With just the two boats that we have we are generating a net profit of almost £1000 and given that we have the potential to use 60 boats that are readily available to use from our partnering NGO, our potential profit is enormous and enough to continue the research & development of our technology, pay our workers and follow a long-term sustainable model.</p>
		<p>The number of locals that we could reach and develop trusting relationships with also increases therefore improving our reputation and success in helping more vulnerable areas and empower locals.</p>
	</div>
@endsection

@section('content')

    {{--Funding goals module --here--}}

    @include('partials._partner_logos')
@endsection
