<form id="dormForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
  <fieldset>

    <!-- Form Name -->
    <legend>Add a Dorm</legend>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Name</label>  
      <div class="col-md-4">
        <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
      </div>
    </div>
    <input id="landlord_id" name="landlord_id" type="text" value="{{Auth::user()->id}}" hidden>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address">Address</label>  
      <div class="col-md-4">
        <input id="address" name="address" type="text" placeholder="#12 Lark St., Davao City" class="form-control input-md" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-5 control-label" for="address">Mark your Dormitory Address:</label>
      <div class="col-md-12">

         

        <div style="width:40%; margin: 0 auto;">
          
          <div id="map-canvas" style="width:70%; height: 250px;margin: 0 auto;"></div>
        </div>

      </div>
      
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="business_permit">Business Permit</label>  
      <div class="col-md-4">
        <input id="business_permit" name="business_permit" type="text" placeholder="Business Permit" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Description</label>  
      <div class="col-md-4">
        <input id="description" name="description" type="text" placeholder="desc" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="price">Price</label>  
      <div class="col-md-4">
        <input id="price" name="price" type="text" placeholder="price" class="form-control input-md" required="">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group ">
       <label class="col-md-4 control-label" for="price">Attributes</label>  
        <div class="m-auto w-50 col-md-4 text-dark">
          @include('forms.attributes') 
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="curfew">Curfew</label>  
      <div class="col-md-4">
        <input id="curfew" name="curfew" type="text" placeholder="curfew" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Rooms</label>
      <div class="col-md-4">
        <select id="selectbasic" name="rooms" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3+">3+</option>
        </select>
      </div>
    </div>


    <!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Gender</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="gender-0">
          <input type="radio" name="gender" id="gender-0" value="male" checked="checked">
          Male
        </label> 
        <label class="radio-inline" for="gender-1">
          <input type="radio" name="gender" id="gender-1" value="female">
          Female
        </label> 
        <label class="radio-inline" for="gender-2">
          <input type="radio" name="gender" id="gender-2" value="mixed">
          Mixed
        </label>
      </div>
    </div>

    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="photo">Photo</label>
      <div class="col-md-4">
        <input id="photo" name="photo" class="input-file" type="file">
      </div>
        <input type="hidden" class="form-control" name="lat" id="lat">
        <input type="hidden" class="form-control" name="lng" id="lng">
    </div>

        <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
     <label class="col-md-4 control-label" for="filters">Filters</label>

     <div class="col-md-5 ml-5"> @include('forms.dorm_filters')</div>
     
    </div>


    <!-- Button -->
    <div class="form-group mt-5">
      <label class="col-md-2 control-label" for="submit"></label>
      <div class="col-md-8">
        <button id="submit" name="submit" class="btn btn-primary w-100">Submit</button>
      </div>
      <label class="col-md-2 control-label" for="submit"></label>
    </div>

  </fieldset>
</form>


