@extends('main')

@section('title', 'Who We Are')
@section('page', 'about')
@section('meta_des', 'Bringing affordable & renewable electricity to Bangladesh')


@section('banner')
	<div class="col-md-8 col-lg-8 col-xl-6 align-self-center bg-t-purple">
		<h1>WHO WE ARE</h1>
        <p class="mt-4">The Charge Project is a team of student volunteers from Enactus Southampton who volunteer our time to develop sustainable social enterprises.</p>
		<p class="mt-1">We work together with Phd researchers & masters students from the University of Southampton's Electronics and Computer Science department as well as one of Bangladesh's largest NGOs: Gana Unnayan Kendra (GUK) to provide clean and renewable electricity to communities in Bangladesh with no access to static electricity.</p>
	</div>
@endsection

@section('content')
	<div class="container home-what-we-do">
		<div class="row">
			<div class="col-lg-8 col-xl-6">
				<h2 class="mb-3">OUR STORY</h2>
				<p>In 2015 we developed The Charge Project, with the idea that we could convert the source of the problem, in our solution. This enterprise uses solar panelled commuter boats to charge battery packs. We recognised the desperate need that these families had for affordable, clean energy. So, in partnership with PhD students studying solar technology, we developed an enterprise to supply a sustainable source of electricity.</p>

				<p>We launched a pilot scheme in Summer 2017 with our project partner Gana Unnayan Kendra (GUK), one of the largest NGOs in Bangladesh. They provided us with a commuter boat and employees who helped us with implementation. Solar panels were installed onto the boat, which were used to charge 30 battery packs. </p>

				<p>The pilot proved to be a huge success, with all batteries being rented out to members of the community, meeting the energy needs of 30 families.  These families no longer needed to use kerosene, saving them money, improving their health, and allowing their children to study in the evenings. The pilot also attracted a waiting list of customers, who wanted access to the product once we’d expanded.</p>

                <p>We’re working with the Dhaka Institute of Technology in Bangladesh to ensure high quality product by putting our solar panels into a serious of testings and experiments while Doctors at the New York University of Economics carrying out a social welfare based research on the project.  </p>

			</div>

			<div class="col-lg-4 col-xl-6 impact-metrics text-center align-self-center">
				<div class="kpi-type">
					<div><span class="number">2 boats</span></div>
					<span class="name ">Solar equipped boats operational so far.</span>
				</div>
				<div class="kpi-type">
					<div><span class="number">150 people a day</span></div>
					<span  class="name">Provided with clean energy every day.</span>
				</div>
			</div>
		</div>
	</div>

    @include('partials._partner_logos')


@endsection
