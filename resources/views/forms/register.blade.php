

  <form id="registerForm" enctype="multipart/form-data" method="POST">


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif


    @if(!Auth::guest())
      @if(Auth::user()->isAdmin())
       <input type="hidden" name="user_type" value="1">
       @endif
    
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if((basename($_SERVER['REQUEST_URI'])) === "register")
    <div class="input-group mb-3 my-5 flex-box-around">

      <h6>I am a</h6>
      <label for="landlord">
        Landlord
        <input id="landlord" name="user_type_id" type="radio" value="2">
      </label>

      <label for="boarder">
        Boarder
        <input id="boarder" name="user_type_id" type="radio" value="3" checked="checked">
      </label>

    </div>
    @endif

    @if((basename($_SERVER['REQUEST_URI'])) === "register") 
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-user"></i>&nbsp;Username
        </span>
      </div>
         <input id="username" name="username" class="form-control" type="text" placeholder="{{!Auth::guest() ? Auth::user()->username : 'Username'}}">
       
    </div>
    @endif

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-envelope"></i>&nbsp;Email
        </span>
      </div>
      <input id="email" name="email" class="form-control" type="email" placeholder="{{!Auth::guest() ? Auth::user()->email : 'Email'}}">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-lock"></i>&nbsp;Password
        </span>
      </div>
      <input id="password" name="password" class="form-control" type="password" placeholder="Password">
    </div>
    <div class="input-group mb-4">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-lock"></i>&nbsp;Confirm Password
        </span>
      </div>
      <input id="confirm" name="password_confirmation" class="form-control" type="password" placeholder="Confirm password">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-vcard"></i>&nbsp;First Name
        </span>
      </div>
      <input class="form-control" name="first_name" type="text" placeholder="{{!Auth::guest() ? Auth::user()->first_name : 'First name'}}">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-vcard-o"></i>&nbsp;Last Name
        </span>
      </div>
      <input class="form-control" name="last_name" type="text" placeholder="{{!Auth::guest() ? Auth::user()->last_name : 'Last name'}}">
    </div>
    <div class="input-group mb-3 my-5 flex-box-around">
      <h6>Gender</h6>
      <label for="male">
        <i class="fa fa-mars"></i>
        Male
        <input id="male" name="gender" type="radio" value="male" checked="{{!Auth::guest() && Auth::user()->gender == 'male' ?  'checked'  : ''}}" required>
      </label>

      <label for="female">
        <i class="fa fa-venus"></i>
        Female
        <input id="female" name="gender" type="radio" value="female" checked="{{!Auth::guest() && Auth::user()->gender == 'female' ?  'checked'  : ''}}" required>
      </label>

    </div>

    @if((basename($_SERVER['REQUEST_URI'])) !== "register") 
      @include('forms.user_details')
    @endif

    <button class="btn btn-block btn-success" type="submit">
      {{Auth::guest()  ?  'Create Account' : 'Submit'}}
      
    </button>
  </form>

