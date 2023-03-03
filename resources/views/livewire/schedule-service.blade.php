<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
{{-- {{ $numos}}
{{$totalpmnt}} --}}
    <div class="card-body">
		<table class="table" id="products_table">
			<thead>
			<tr>
				<th>Service</th>
				<th>Price</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
			@foreach ($schedule_service as $index => $schedule_service)
				<tr>
					<td>
						<select

						
						{{-- disabled --}}
						value=" {{ old('schedule_service'.$index.'service_name') }}"
						id="srvname[{{$index}}]"
						name="schedule_service[{{$index}}][service_name]"
						wire:click="changeEvent($event.target.value,{{$index}})"
								class="form-control"
								
								>
							<option value="">-- choose Service --</option>
							@foreach ($allservices as $service)
								<option value="{{ $service->service_name }}"   >
					

									{{ $service->service_name }} 
								</option>
							@endforeach
						</select>
					</td>
					<td>
						<input type="number" id="subprice[{{$index}}]"
							   name="schedule_service[{{$index}}][service_price]"
							   class="form-control"
											     value="{{ $srvprice[$index]?$srvprice[$index]:0; }}"		

							   				@if ($service->service_price > 0 )

											   disabled="true"
											@else

											@endif

											
							 
							   {{-- wire:change="changeEvent2($event.target.value)" --}}
			    />

					</td>
					<td>
						<a href="#" 
						wire:click.prevent="removeservice({{$index}})"
						>Delete</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
<input type="hidden" value="{{ $numos }}" id="numos"/>
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-sm btn-secondary"
					wire:click.prevent="addservice"
					>+ Add Another Service</button>
			</div>
		</div>
	</div>
</div>
