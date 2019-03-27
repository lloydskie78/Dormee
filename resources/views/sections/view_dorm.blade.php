

<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(isset($msg))
      <div class="alert alert-primary">$msg</div>
      @endif

           @if(Auth::check())
      @if(Auth::user()->isAdmin() and $dorm->status == "0")
      <a href="verify/{{$dorm->id}}" class="btn btn-primary">Verify Dorm</a>
      @endif

      <a href="bookmark/{{$dorm->id}}" class="btn btn-primary pull-right">Bookmark</a>
      @endif
      
    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade w-100" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            @php 
            $src = "";
            if (!is_null($dorm->photos())) {
            $src = $dorm->photos()->get()->first()->photo;
          } else { 
          $src = "public/img/bg/blue_fan.jpg"; }
          @endphp


          <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="{{asset($src)}}">
            <div class="carousel-caption">
              <h5 class="m-0">{{$dorm->name}}</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item "> <img class="d-block img-fluid w-100" src="{{asset($src)}}">
            <div class="carousel-caption">
              <h5 class="m-0">{{$dorm->name}}</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item"> <img class="d-block img-fluid w-100" src="{{asset($src)}}">
            <div class="carousel-caption">
              <h5 class="m-0">{{$dorm->name}}</h5>
              <p></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-7 pl-5">
           <h4 class=" my-4">{{$dorm->name}}</h4>
 
        </div>
        <div class="col-md-5 ">
          <div class="box text-white">{{$dorm->price}} Php / month</div>
        </div>
      </div>
     
    </div>


      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#tabone">Basic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#tabtwo">Filters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#tabthree">Landlord</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content mt-2">
              <div class="tab-pane fade show" id="tabone" role="tabpanel">
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped">
                      <tr>
                        <td>Name</td>
                        <td>{{$dorm->name}}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>{{$dorm->address}}</td>
                      </tr>
                      <tr>
                        <td>Business Permit</td>
                        <td>{{$dorm->business_permit}}</td>
                      </tr>
                      <tr>
                        <td>Description</td>
                        <td>{{$dorm->description}}</td>
                      </tr>
                      <tr>
                        <td>Monthly Rent</td>
                        <td>{{$dorm->price}}</td>
                      </tr>
                      <tr>
                        <td>Curfew</td>
                        <td>{{$dorm->curfew}}</td>
                      </tr>
                      <tr>
                        <td>Rooms</td>
                        <td>{{$dorm->rooms}}</td>
                      </tr>


                    </table>

                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabtwo" role="tabpanel">

                <ul class="list-group list-group-flush">
                  @php

                  if (!is_null($dorm->dormFilters()->first())) {
                  if($dorm->dormFilters()->first()->count > 0) {

                  foreach($dorm->dormFilter()->get() as $filter) {
                  echo "
                  <li class='list-group-item'>
                    <i class='fa fa-cloud text-primary mr-2'></i>
                    $filter->name</li>";
                  } 
                } else {  echo "No filters."; } 
              } else {  echo "No filters."; } 

              @endphp

            </ul>
          </div>
          <div class="tab-pane fade" id="tabthree" role="tabpanel">
            <h4>
              About the Landlord
            </h4>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <img alt="landlord photo" src="{{asset($dorm->landlord->photo)}}" class="img-thumbnail" />
                </div>
                <div class="col-md-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <td><b>Name</b></td>
                        <td>{{$dorm->getLandlordName()}}</td>
                      </tr>
                      <tr>
                        <td><b>About</b></td>
                        <td>{{$dorm->landlord()->first()->about}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
</div>
</div>


<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
         <div class="col-md-6">
            <h4 class="py-3">Description<br></h4>
           
         </div>
          <div class="col-md-6">
            <h4 class="py-3">Attributes<br></h4>
            @php

            $udar = new \App\UserDormAttributeRating;
            $clean = $udar->getSpecificRatings($dorm->id, 1);
            $safe = $udar->getSpecificRatings($dorm->id, 2);
            $amb = $udar->getSpecificRatings($dorm->id, 3);
            $fac = $udar->getSpecificRatings($dorm->id, 4);
            $acc = $udar->getSpecificRatings($dorm->id, 5);

            @endphp

            <table class="table table-hover table-striped">
              <tr>
                <td>Cleanliness</td>
                <td>{{is_null($clean[0]["avg"])? 1 : $clean[0]["avg"]}}</td>
              </tr>
              <tr>
               <td>Safety</td>
               <td>{{is_null($safe[0]["avg"]) ? 1 : $safe[0]["avg"]}}</td>
             </tr>
             <tr>
               <td>Ambiance</td>
               <td>{{is_null($amb[0]["avg"]) ? 1 : $amb[0]["avg"]}}</td>
             </tr>
             <tr>
               <td>Facilities</td>
               <td>{{is_null($fac[0]["avg"]) ? 1 : $fac[0]["avg"]}}</td>
             </tr>
             <tr>
               <td>Access to Transport</td>
               <td>{{is_null($acc[0]["avg"]) ? 1 : $acc[0]["avg"]}}</td>
             </tr>
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="row">
  <div class="col-md-8">
            <h4 class="mb-2">Address</h4>
            {{$dorm->address}}

            <iframe width="100%" height="400" src="https://maps.google.com/maps?q={{$dorm->address}}, Davao City, 8000 Davao del Sur&amp;z=14&amp;output=embed" scrolling="yes" frameborder="0"></iframe>
   
  </div>
</div>

<div class="pb-4">
  <div class="container">
    <div class="row py-4">
      <div class="col-md-6 mb-5">
       <h4 class="">Reviews<br></h4>
       <hr>
       @php
       if (!empty($reviews) && $reviews->count() > 0) {
       $i = 0;
       foreach($reviews as $review) {
       $name = $review->user->first_name . $review->user->last_name;
       echo "<div class='row'>
        <div class='col-md-2'>
          <img class='comment-img' src='http://2.bp.blogspot.com/-WCkoxnPWXcE/TbZTDG0UI-I/AAAAAAAAAAQ/mukPK0QOVLI/s1600/hotlink.jpg'>
        </div>
        <div class='col-md-10 alert alert-primary'>
          <div>
           <h6>Posted by $name on $review->created_at</h6> 
         </div>
         <p>$review->review</p>
         <p class='pull-right'><a href=' '><i class='glyphicon glyphicon-flag'> </i></a></p>
       </div>

     </div>
     ";
     $i++;

   }
 } else { echo "No reviews."; }
 @endphp


 @if(Auth::check())
 <form role="form" method="post">
  <div class="form-group py-2">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="uid" value="{{Auth::user()->id}}">
    <input type="hidden" name="did" value="{{$dorm->id}}">
    <label class="mt-5 mb-2" for="review" name="review">
      Write a review
    </label>

    <textarea type="text" class="form-control" id="review" name="review" required>
    </textarea>
  </div>

  <button type="submit" class="btn btn-primary">
    Submit
  </button>
</form>
@endif

</div>

<div class="col-md-6">
  @if(Auth::check())
  <h4>Rate Dorm</h4>
  <table class="table table-hover">
    <tr>
      <td> Cleanliness</td>
      <td>  <fieldset class="rating">

        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
      </fieldset></td>
    </tr>
    <tr>
      <td>Safety</td>
      <td> <fieldset class="rating">
        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
      </fieldset></td>
    </tr>
    <tr>
      <td>Ambiance</td>
      <td> 
        <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
        </fieldset></td>
      </tr>
      <tr>
        <td>Facilities</td>
        <td> <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
        </fieldset></td>
      </tr>
      <tr>
        <td>Access to Transport</td>
        <td> <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
        </fieldset></td>
      </tr>
    </table>
    @endif
  </div>
</div>


