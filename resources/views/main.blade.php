<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('partials._cookies')
	<head>
		@include('partials._head')
    </head>
	<body>
		<div id="app">
			@include('partials._topmenu')
			<main role="main">
				<div class="sp-pre"></div>
				@include('partials._banner')
				@yield('content')
            </main>
            @include('partials._footer')
			@include('partials._live_data')
            @include('partials._getintouch')
		</div>
		<script type="text/javascript" src="/js/app.js"></script>
		<script type="text/javascript" src="/js/emailerror.js"></script>


		@yield('scripts')

		<script type="text/javascript">
		// Animate loader off screen
		  $(document).ready(function() {
				$(".sp-pre").fadeOut("slow");
		  });
		</script>

		<script type="text/javascript">
			$(document).ajaxStart(function() {
			 	$(".sp-pre").show();
			});

			$(document).ajaxStop(function() {
			 	$(".sp-pre").hide();
			});
		</script>
    </body>
</html>
