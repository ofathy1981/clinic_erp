<div>
    <div>
        {{-- Care about people's approval and you will be their prisoner. --}}
    
        <div class="card-body">
            <table class="table" id="products_table">
                <thead>
                <tr>
                    <th>Medicine Name</th>
                    <th>Medicine Price</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($payment_medicine as $index => $payment_medicine)
                    <tr>
                        <td>
                            <select
                            name="payment_medicine[{{$index}}][medicine_name]"
                               
                                    class="form-control">
                                <option value="">-- choose Service --</option>
                                @foreach ($allservices as $service)
                                    <option value="{{ $service->id }}">
                                        {{ $service->medicine_name }} 
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number" 
                                   name="payment_medicine[{{$index}}][medicine_quantity]"
                                   class="form-control"
                                   wire:model="payment_medicine.{{$index}}.medicine_quantity"
                                   value="{{ $payment_medicine['medicine_quantity']}}"
                                    />
                        </td>
                        <td>
                            <input type="number"

                                   name="payment_medicine[{{$index}}][unit_price]"
                                   class="form-control"
                                   wire:model="payment_medicine.{{$index}}.unit_price"
                                   value="{{ $payment_medicine['unit_price']}}"
                                    />
                        </td>

                        <td>
                            <input type="number"
                                   name="payment_medicine[{{$index}}][total]"
                                   class="form-control"
                                   id="totalsubprice[{{$index}}]"
                                   value="{{data_get($payment_medicine,'medicine_quantity') * data_get($payment_medicine,'unit_price')}}"

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
