<?php

namespace App\Http\Livewire;
use app\Models\payment_medicine,App\Models\medicine;

use Livewire\Component;

class PaymentMedicine extends Component
{
    public $qty;
    public $prc=0;
    public  $allservices=[];
    public  $payment_medicine=[];


     public function mount(){
 
         $this->allservices = medicine::all();
 
             $this->payment_medicine = [['medicine_name' => '', 'medicine_quantity' => 1,'unit_price' => 1,'total'=>1]] ;


         }

     
         public function addservice()
         {
            $this->payment_medicine[] = ['medicine_name' => '', 'medicine_quantity' => 1,'unit_price' => 1,'total'=>1];

         }
     
         public function removeservice($index)
         {
             unset($this->payment_medicine[$index]);
             $this->payment_medicine = array_values($this->payment_medicine);
         }
    public function render()
    {
        // $this->multiple=data_get($this->payment_medicine[1]*$this->payment_medicine[2];
        $this->qty=data_get($this->payment_medicine,'medicine_quantity') * data_get($this->payment_medicine,'unit_price');
        // dd( $this->qty);
        return view('livewire.payment-medicine',['qty'=>$this->qty]);
    }
}
