@php 
  if(basename($_SERVER['REQUEST_URI']) != 'admin') {
  $dorms = \App\Dorm::all()->where('landlord_id', Auth::user()->id);
} else {

$dorms = \App\Dorm::all()->where('status', 0);
}

@endphp

<center>

@if($dorms->count() > 0)
@if(Auth::user()->isAdmin())


<!--Table-->
  <div class="table-responsive">
    <table class="table table-hover">

    <!--Table head-->


    <thead>
      <tr>
        <th>ID</th>
        <th>Landlord</th>
        <th>Name</th>
        <th>Business Permit</th>
        <th>Applied On</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>

     <tr>
      <?php
      foreach ($dorms as $dorm) {
        $dorm_url = "dorms/$dorm->id";
        echo "
        <td><a href='". URL::to($dorm_url) . "'>" . $dorm->id . "</a></td>
        <td>" . $dorm->first()->landlord->first_name . $dorm->first()->landlord->last_name  . "</td>
      
        <td>" . $dorm->name . "</td>
        <td>" . $dorm->business_permit . "</td>
        <td>" . $dorm->created_at  . "</td>
        </tr>
        ";
      }
      ?>


    </tbody>
    <!--Table body-->
  </table>



@else
<!--Table-->
<div class="table-responsive">
  <table class="table table-hover">

  <!--Table head-->


  <thead>
    <tr>
      <th>ID</th>
      <th>Landlord</th>
      <th>Status</th>
      <th>Name</th>
      <th>Address</th>
      <th>Business Permit</th>
      <th>Price</th>
      <th>Filters</th>
      <th>Created At</th>
      <th>Action</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>

   <tr>
    <?php
    foreach ($dorms as $dorm) {
      $filters = "";
      foreach ($dorm->dormFilters()->get() as $filter) {
        $filters .= $filter->name . ", " ;
      }
      $stat = $dorm->status == 1 ? "Verified" : $dorm->status == 0 ? "Unverified" : "Occupied";
      $dorm_url = "dorms/$dorm->id";
      echo "
      <td><a href=". URL::to($dorm_url) . "'>" . $dorm->id . "</a></td>
      <td>" . $dorm->first()->landlord->first_name . $dorm->first()->landlord->last_name  . "</td>
      <td>" .  $stat . "</td>
      <td>" . $dorm->name . "</td>
      <td>" . $dorm->address . "</td>
      <td>" . $dorm->business_permit . "</td>
      <td>" . $dorm->price . "</td>
      <td>" . $filters.  "</td>
      <td>" . $dorm->created_at  . "</td>
      <td> " . '<a href="#" class="btn btn-sm btn-info"> View Map</a>' . "</td>
      </tr>
      ";
    }
    ?>


  </tbody>
  <!--Table body-->
</table>
</div>
@endif
  

@else
No dorms to show.
@endif
<!--Table-->
</center>