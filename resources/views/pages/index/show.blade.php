@extends('layouts.app')
@include('static.header')
@section('content')

<!-- Hero section -->
<div class="hero-section blur pb-5"
style="
background-image:url('{{asset('public/img/bg/blue.jpg')}}');
background-size: cover; 
background-repeat: no-repeat;
background-attachment: fixed; 
background-position: bottom;
display: block;
 position: relative;
 height: auto;
 min-height: 100% !important;">
<div class="bg-opacity" style="background-size: 100%; width:100%; min-height: 100% !important; padding: 0;"> 
	<div class="container hero-text text-white w-100 ">
		<h2 class="text-shadow">Find your ideal dormitory</h2>
		<p class="text-shadow">Search through dormitories that suit your preferences.</p>
		<div class="row">
			<div class="col-md-5 box m-auto faa-float animated shadowed rounded" style="height: 250px; max-width: 250px;">
				<span class="glyphicon glyphicon-home fa-5x mt-5 faa-tada animated"></span>
				<h3 class="my-5">Dorms</h3>
			</div>
			<div class="col-md-2">
				<span class="glyphicon glyphicon-refresh fa-pulse fa-5x mt-5 fa-spin py-5"></span>
			</div>
			<div class="col-md-5 box m-auto faa-float animated shadowed rounded" style="height: 250px; max-width:250px;">
				<span class="fa fa-child mt-5 fa-5x faa-tada animated"></span>
				<h3 class="my-5">Roommates</h3>
			</div>
		</div>
	</div>
</div>


</div>
<!-- Hero section end -->



<!-- Filter form section -->
<div class="filter-search">
	<div class="container">
		<form class="filter-form">
			<input type="text" placeholder="Enter a street name, address number or keyword">
			<select>
				<option value="City">Room</option>
				<option value="City">City</option>
			</select>
			<select>
				<option value="City">State</option>
			</select> 
			<button class="site-btn fs-submit">SEARCH</button>
		</form>
	</div>
</div>
<!-- Filter form section end -->



<!-- Properties section -->
<section class="properties-section spad">
	<div class="container">
		<div class="section-title text-center">
			<h3>RECENT PROPERTIES</h3>
			<p>Discover dorm listings</p>
		</div>
		<div class="text-center">
			@include('sections.recent_dorms')
		</div>
</div>
</section>

	@endsection
