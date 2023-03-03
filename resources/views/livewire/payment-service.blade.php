<div>
    <div>
        {{-- Care about people's approval and you will be their prisoner. --}}
    
        <div class="card-body">
            <table class="table" id="products_table">
                <thead>
                <tr>
                    <th>Service Name</th>
                    <th>Service Price</th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                @foreach ($payment_service as $index => $payment_service)
                    <tr>
                        <td>
                            <select
                            
                            name="payment_service[{{$index}}][service_name]"
                            wire:click="changeEvent($event.target.value)"
                                    class="form-control">
                                <option value="">-- choose Service --</option>
                                @foreach ($allservices as $service)
                                    <option value="{{ $service->service_name }} "   >
                                        {{ $service->service_name }} 
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number"
                            id="pmntsubprice[{{$index}}]" id="pmntsubprice[{{$index}}]"
                                   name="payment_service[{{$index}}][service_price]"
                                   class="form-control"
                                   value="{{ $srvprice[$index] }}"	
                                   {{-- wire:change="payment_service.{{$index}}.service_price"

                                   wire:model="payment_service.{{$index}}.service_price" --}}
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
            <input type="hidden" value="{{ $paymentnumos }}" id="numos"/>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-sm btn-secondary"
                        wire:click.prevent="addservice"
                        >+ Add Another Service</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
