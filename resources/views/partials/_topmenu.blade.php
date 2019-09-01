<nav class="navbar navbar-light navbar-inverse navbar-expand-xl fixed-top nav-alpha">
	<div class="container">
		<a class="navbar-brand" href="{{url('/')}}"><img height="70px" src="{{url('/imgs/logos/chargelogos4.png')}}" alt="Charge Project"></a>

		<div class="d-flex flex-row order-2 order-md-3 ">
            <ul class="menu-btn-list">
				<li class="nav-item">
					<a class="nav-link nav-cta" data-toggle="modal" data-target="#requestLiveData"><i class="fas fa-chart-line"></i> LIVE DATA FEED</a>
				</li>
			</ul>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="#mainmenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>

		<div class="navbar-collapse collapse order-3 order-md-2" id="mainmenu">
			<ul class="navbar-nav ml-auto nav-main">

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}"><i class="fas fa-house-damage"></i> HOME</a>
                </li>

				<li class="nav-item">
					<a class="nav-link" href="{{route('page.about')}}"><i class="fas fa-users"></i> ABOUT</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{route('page.research')}}"><i class="fas fa-solar-panel"></i> RESEARCH</a>
				</li>

                {{--
                <li class="nav-item">
                    <a class="nav-link" href="{{route('page.future')}}"><i class="fas fa-cogs"></i> FUTURE</a>
                </li>
                --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{route('page.funding')}}"><i class="fas fa-pound-sign"></i> FUNDING</a>
                </li>

                <li class="nav-item menu-btn-list-clean">
                    <a class="nav-link" data-toggle="modal" data-target="#getInTouch"><i class="fas fa-paper-plane"></i> GET IN TOUCH</a>
                </li>

			</ul>
		</div>


	</div>
</nav>
