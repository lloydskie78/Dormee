
    <div class="input-group mb-3 my-5 flex-box-around">
      <h6>Occupation</h6>
      <label for="student">
        Student
        <input id="student" name="occupation_id" type="radio" value="1" checked="{{!Auth::guest() && Auth::user()->occupation_id == 1 ?  'checked'  : ''}}"  required>
      </label>

      <label for="employee">
        Employee
        <input id="employee" name="occupation_id" type="radio" value="2" checked="{{!Auth::guest() && Auth::user()->occupation_id == 2 ?  'checked'  : ''}}" required>
      </label>

      <label for="other">
        Other
        <input id="other" name="occupation_id" type="radio" value="3" checked="{{!Auth::guest() && Auth::user()->occupation_id == 3 ?  'checked'  : ''}}" required>
      </label>

    </div>
    <div class="input-group mb-3 my-5">
         <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-calendar"></i>&nbsp;Birthdate
        </span>
      </div>
      <input id="birthdate" name="birthdate" class="form-control" name="birthdate" type="date" placeholder="{{!Auth::guest()  ?  Auth::user()->birthdate  : ''}}" required>
    </div>
    <div class="input-group mb-3 my-5">
         <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-phone"></i>&nbsp;Phone
        </span>
      </div>
      <input id="phone" name="phone" class="form-control" name="phone" type="number" maxlength="11" placeholder="{{!Auth::guest()  ?  Auth::user()->phone  : ''}}" required>
    </div>
    <div class="input-group mb-3 my-5">
         <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-map-signs"></i>&nbsp;Address
        </span>
      </div>
      <input id="address" name="address" class="form-control" name="address" type="text" placeholder="{{!Auth::guest() ? Auth::user()->address  : ''}}"  required>
    </div>
    <div class="input-group mb-3 my-5">
         <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-pencil"></i>&nbsp;About
        </span>
      </div>
      <textarea id="about" name="about" class="form-control" name="about" type="text" placeholder="{{!Auth::guest()  ?  Auth::user()->about  : ''}}"  required>
      </textarea>
    </div>
    <div class="input-group mb-3 my-5">
      <h6>Photo</h6>

      @if (!Auth::guest())  <img src="{{Auth::user()->photo}}"> @endif
      <input id="photo" name="photo" type="file" value="{{!Auth::guest()  ?  Auth::user()->photo  : ''}}" required>
    </div>