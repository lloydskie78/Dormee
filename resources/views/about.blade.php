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
					<h5>OUR QUALITY</h5>
					
				</div>
			</div>
		</div>
		
		<!-- Review section -->
		<section class="review-section set-bg" data-setbg="{{URL::asset('public/img/review-bg.jpg')}}">
			<div class="container">
				<div class="review-slider owl-carousel">
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="{{URL::asset('public/img/review/1.jpg')}}"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="{{URL::asset('public/img/review/1.jpg')}}"></div>
					</div>
					<div class="review-item text-white">
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>“Leramiz was quick to understand my needs and steer me in the right direction. Their professionalism and warmth made the process of finding a suitable home a lot less stressful than it could have been. Thanks, agent Tony Holland.”</p>
						<h5>Stacy Mc Neeley</h5>
						<span>CEP’s Director</span>
						<div class="clint-pic set-bg" data-setbg="{{URL::asset('public/img/review/1.jpg')}}"></div>
					</div>
				</div>
			</div>
		</section>
		<!-- Review section end-->


		<!-- Team section -->
		<section class="team-section spad pb-0">
			<div class="container">
				<div class="section-title text-center">
					<h3>OUR TEAM</h3>
					<p>The force behind Dormee/p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="team-member">
							<div class="member-pic">
								<img src="{{URL::asset('public/img/bg/evening.jpg')}}" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Tony Holland</h5>
								<span>Real Estate  Agent</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(567) 666 121 2288</p>
									<p><i class="fa fa-envelope"></i>tonyholland@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="team-member">
							<div class="member-pic">
								<img src="{{URL::asset('public/img/team/2.jpg')}}" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Sasha Gordon</h5>
								<span>Researcher</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(567) 666 121 2243</p>
									<p><i class="fa fa-envelope"></i>sashagordon@gmail.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="team-member">
							<div class="member-pic">
								<img src="{{URL::asset('public/img/team/3.jpg')}}" alt="#">
								<div class="member-social">
									<a href=""><i class="fa fa-facebook"></i></a>
									<a href=""><i class="fa fa-instagram"></i></a>
									<a href=""><i class="fa fa-twitter"></i></a>
								</div>
							</div>
							<div class="member-info">
								<h5>Nicky Butt</h5>
								<span>Nicky Butt</span>
								<div class="member-contact">
									<p><i class="fa fa-phone"></i>(567) 666 121 2255</p>
									<p><i class="fa fa-envelope"></i>nickybutt79@gmail.com</p>
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