@if (isset($recent) && $recent->count() > 0) 
	@php
	$i = 0;
		foreach($recent as $rec) {

			$src = 'public/img/propertie/1.jpg';
			$url = 'dorms/' . $rec->id;

			if ($rec->photo() != null) {
				$src = $rec->photo->first()->photo;
			}

			if ($i + 1 % 2 == 0)  { echo "<div class='row'>"; } 

			echo "
				<div class='col-md-6'>
					<div class='propertie-item set-bg'
					style='background-image:url(\"" .  asset($src) ."\"); background-size: contain;'>
						<div class='rent-notic'>Available</div>
						<div class='propertie-info text-white'>
							<div class='info-warp'>
								<a href=" . URL::to($url) . ">
									<h5>$rec->name</h5>
								</a>
								<p>
									<i class='fa fa-map-marker'></i>
									$rec->address
								</p>
							</div>
							<div class='price'>Php $rec->price / month</div>
						</div>
					</div>
				</div>
				
			";
			if ($i + 1 % 2 == 0)  { echo "</div>"; }
			$i++;

		}
	@endphp
@else 

 	@include('errors.no_dorms')

@endif



