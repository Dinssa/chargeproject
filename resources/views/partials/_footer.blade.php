<footer class="container-fluid  bg-l-grey">
	<div class="container">
		<div class="col-lg-2 social-icons d-flex justify-content-between">
			<a target="_blank" href="https://www.facebook.com/Enactus.Southampton/"><i class="fab fa-facebook-f "></i></a>
			<a target="_blank" href="https://www.instagram.com/enactussoton/"><i class="fab fa-instagram"></i></a>
			<a target="_blank" href="https://twitter.com/enactussoton"><i class="fab fa-twitter"></i></a>
			<a target="_blank" href="https://www.linkedin.com/in/enactussouthampton/"><i class="fab fa-linkedin-in"></i></a>
		</div>

		<ul class="footer-menu">
			<li><a class="menu-link" href="{{route('page.about')}}">ABOUT</a></li>
			<li><a class="menu-link" href="{{route('page.policy')}}">PRIVACY POLICY</a></li>
			<li><a class="menu-link" href="{{route('page.research')}}">RESEARCH</a></li>
			<li><a class="menu-link popup" data-toggle="modal" data-target="#getInTouch">GET IN TOUCH</a></li>
            <li class="copyright">© {{ date('Y') }} <a target="_blank" href="http://enactusuk.org/"> ENACTUS SOUTHAMPTON. </a></li>
		</ul>
	</div>
</footer>
