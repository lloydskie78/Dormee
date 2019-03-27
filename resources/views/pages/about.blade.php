@extends('layouts.app')

@section('content')
	<!-- page -->
	<section class="page-section">
		<div class="container">
			<img class="mb-5" src="{{URL::asset('public/img/about.jpg')}}" alt="">
			<div class="row about-text">
				<div class="col-xl-6 about-text-left">
					<h5>ABOUT US</h5>
					<p>Dormee is a cross-platform system dedicated to delivering quality dorm recommendations to people within Davao City.</p>
				</div>
				<div class="col-xl-6 about-text-right">
					<h5>FIND DORMS AND ROOMMATES</h5>
					<p>Searching for dorms or roommates is done within just a few moments with our platform.</p>
					<ul class="about-list">
						<li><i class="fa fa-check-circle-o"></i>Easy searching</li>
						<li><i class="fa fa-check-circle-o"></i>Filters for better searching</li>
						<li><i class="fa fa-check-circle-o"></i>Ratings and reviews</li>
					</ul>
				</div>
			</div>
		</div>
		
		

		<!-- Team section -->
		<section class="team-section spad pb-0">
			<div class="container">
				<div class="section-title text-center">
					<h3>OUR TEAM</h3>
					<p>The  driving force behind Dormee</p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="team-member">
							<div class="member-pic">
								<img src="{{URL::asset('public/img/bg/fence_blur.jpg')}}" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Lloyd Alcantara</h5>
								<span>Admin</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(567) 666 121 2288</p>
									<p><i class="fa fa-envelope"></i>lloyd_alcantara@umindanao.edu.ph</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="team-member">
							<div class="member-pic">
								<img src="{{URL::asset('public/img/bg/fence_blur.jpg')}}" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Ceej Tayco</h5>
								<span>Admin</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(567) 666 121 2243</p>
									<p><i class="fa fa-envelope"></i>ceejltayco@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="team-member">
							<div class="member-pic">
								<img src="{{URL::asset('public/img/bg/fence_blur.jpg')}}" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Celine Zosa</h5>
								<span>Admin</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(567) 666 121 2255</p>
									<p><i class="fa fa-envelope"></i>zosacelinemarie@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team section end-->
	</section>
	<!-- page end -->

@stop