@extends('layouts.app')
@section('content')

<div class="text-white bg-primary bg-opacity" style="background-image:url('{{asset('public/img/bg/bed_plant.jpg')}}'); 
background-size: 100%; 
background-position: center;">

<div class="container w-100 bg-opacity" style="width: 100%; padding: 0;">

  <div class="col-md-6  text-center my-5 p-5">
    <h1 class="display-1">Dorms</h1>
    <p class="lead">Search for the right one.&nbsp;</p>
  </div>

  <form method="post">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="col-md-6 bg-light text-dark py-5 p-5 shadowed">

    <div class="row mt-5">
      <div class="col-md-12 text-dark">

        <div class="input-group">
          Name
          <input type="text" class="form-control" placeholder="" name="query">
        </div>
        
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
       <div class="input-group">
        Budget <input type="number" class="form-control" placeholder="" name="budget" min="0">
      </div>
    </div>

  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      Curfew <input id="curfew" name="curfew" type="time" placeholder="curfew" class="form-control input-md" required>
    </div>
  </div>


  <div class="mt-4 row">

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          Gender
        </div>
        <div class="col-md-3">
         <span class="text-dark"><label class="radio-inline" for="gender-0">
          <input type="radio" name="gender" id="gender-0" value="male" checked="checked">
          Male
        </label> </span>
      </div>


    <div class="col-md-3">

     <span class="text-dark"><label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="female">
      Female
    </label> </span>
  </div>

  <div class="col-md-3">
    <span class="text-dark"><label class="radio-inline" for="gender-2">
      <input type="radio" name="gender" id="gender-2" value="mixed">
      Mixed
    </label></span>
  </div>

  
</div>

</div>

</div>


<div class="row mt-4">
  <div class="col-md-12">
   Rooms <select id="selectbasic" name="rooms" class="form-control">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3+">3+</option>
  </select>
</div>
</div>


<div class="row">
 <div class="col-md-12">
   <div class="py-4">
    <div class="pb-4">
     Attributes
   </div>

   @include('forms.attributes')
 </div>
</div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="input-group mt-4">
      Address <input id="address" type="text" class="form-control" placeholder="" name="address">
      
      <p>Mark location</p>
     
        <div id="map-canvas"></div>
      
    </div>
  </div>
</div>


<div class="row my-5">
  <div class="col-md-6">
     <button type="button" id="btnShowFilters" class="btn btn-primary mt-4">Filters</button>
  </div>
  <div class="col-md-6 hidden-box pull-right">

  <div id="filtersBox" class="hidden-box m-auto" style="display: none;">
    <label class="checkbox" for="filters-0">
      <input type="checkbox" name="filters[]" id="filters-0" value="1">
      Roommates
    </label>
    <label class="checkbox" for="filters-1">
      <input type="checkbox" name="filters[]" id="filters-1" value="2">
      Guests Allowed
    </label>
    <label class="checkbox" for="filters-2">
      <input type="checkbox" name="filters[]" id="filters-2" value="3">
      Pets
    </label>
    <label class="checkbox" for="filters-3">
      <input type="checkbox" name="filters[]" id="filters-3" value="4">
      Kitchen
    </label>
    <label class="checkbox" for="filters-4">
      <input type="checkbox" name="filters[]" id="filters-4" value="5">
      Electric Fan
    </label>
    <label class="checkbox" for="filters-5">
      <input type="checkbox" name="filters[]" id="filters-5" value="6">
      Air-con
    </label>
    <label class="checkbox" for="filters-6">
      <input type="checkbox" name="filters[]" id="filters-6" value="7">
      Laundromat
    </label>
    <label class="checkbox" for="filters-7">
      <input type="checkbox" name="filters[]" id="filters-7" value="8">
      Internet
    </label>
    <label class="checkbox" for="filters-8">
      <input type="checkbox" name="filters[]" id="filters-8" value="9">
      TV
    </label>
    <label class="checkbox" for="filters-9">
      <input type="checkbox" name="filters[]" id="filters-9" value="10">
      Closet
    </label>
    <label class="checkbox" for="filters-10">
      <input type="checkbox" name="filters[]" id="filters-10" value="11">
      Parking
    </label>
    <label class="checkbox" for="filters-11">
      <input type="checkbox" name="filters[]" id="filters-11" value="12">
      Elevator
    </label>
    <label class="checkbox" for="filters-12">
      <input type="checkbox" name="filters[]" id="filters-12" value="bathtub">
      Wi-Fi
    </label>
    <label class="checkbox" for="filters-13">
      <input type="checkbox" name="filters[]" id="filters-13" value="14">
      Bathroom
    </label>
  </div>
</div>
</div>


<div class="col-md-12 mt-5 text-center m-auto">
  <input type="submit" class="btn btn-primary" value="Search Dorms">
</div>
</form>

</div> <!-- row -->

</div>   <!--col-md-6 -->

</div>  <!-- row -->
</div> <!-- container -->
</div> <!-- container -->

<div class="container py-5 mt-5" style="padding-top: 100px;">

  @php

  if (!isset($dorms)) {
  $dorms = \App\Dorm::all()->where('status', 1);
}

$i = 0;
$src = "public/img/property-9.jpg";
foreach($dorms as $dorm) {
if ($i + 1 % 3 == 0) {
if (!is_null($dorm->photo())) {
$src = $dorm->photo()->get()->first()->photo;
}


echo "

<div class='row mt-5 space-above w-100'>";
}

echo "<div class='col-md-4 mt-3'>

  <div class='card mt-5 w-100'>
    <img class='card-img-top' src='" . asset($src) . "'>
    <div class='card-body'>
      <h5 class='card-title'>$dorm->name</h5>
      <p class='card-text'>$dorm->address</p>
      <p class='card-text'>$dorm->description</p>
      <a href='dorms/" . $dorm->id . "' class='btn btn-primary'>View Dorm</a>
    </div>
  </div>
</div>";

if ($i + 1 % 3 == 0) {
echo "</div>";
} 
}



@endphp

</div>
@endsection