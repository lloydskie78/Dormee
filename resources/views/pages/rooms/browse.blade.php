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

    <div class="row mt-4">
      <div class="col-md-12">
       <div class="input-group">
        Budget <input type="number" class="form-control" placeholder="" name="budget" min="0">
      </div>
    </div>

  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      Curfew <input id="curfew" name="curfew" type="text" placeholder="curfew" class="form-control input-md" required>
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
          <i class="fa fa-mars"></i>&nbsp;Male
        </label> </span>
      </div>


      <div class="col-md-3">

       <span class="text-dark"><label class="radio-inline" for="gender-1">
        <input type="radio" name="gender" id="gender-1" value="female">
        <i class="fa fa-venus"></i>&nbsp;Female
      </label> </span>
    </div>

    <div class="col-md-3">
      <span class="text-dark"><label class="radio-inline" for="gender-2">
        <input type="radio" name="gender" id="gender-2" value="mixed">
        <i class="fa fa-venus-mars"></i>&nbsp;Mixed
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
      <button type="button" id="btnShowAttributes" class="btn green text-white mt-4 w-100">Attributes&nbsp;<i class="fa fa-list-alt"></i></button>
    </div>
    <div id="attrBox" style="display:none;"> 
      @include('forms.attributes')
    </div>

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
  <div class="col-md-12">
   <button type="button" id="btnShowFilters" class="btn btn-primary mt-4 w-100">Filters&nbsp;<i class="fa fa-tag"></i></button>
 </div>
</div>
<div class="row mb-5">
 <div class="col-md-12 hidden-box ml-5 pl-4">

  <div id="filtersBox" class="hidden-box m-auto" style="display: none;">
    @include('forms.dorm_filters')


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

@endphp



<?php
if($dorms->count() > 0) {
  $i = 0;
$src = "public/img/property-9.jpg";
foreach($dorms as $dorm) {

if ($dorm->photos()->exists()) {
$src = $dorm->photos()->get()->first()->photo;
}
if ($i + 1 % 3 == 0) {
echo "<div class='row mt-5 space-above w-100'>";
}

echo "<div class='col-md-4 mt-3'>

<div class='card mt-5 w-100'>
  <img class='card-img-top' src='" . asset($src) . "' style='height:200px;'>
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
} else { echo 

  "<center><span class='text-center'><i class='text-center fa fa-frown-o fa-5x faa-wrench animated'></i>
<p>Sorry! No dorms are available for this search.</p></span></center>"; 


 }

?>

  





</div>
@endsection