<?php

namespace App\Http\Livewire;
use app\Models\payment_service,App\Models\medical_service;

use Livewire\Component;

class PaymentService extends Component
{
    public $paymentnumos=1;
    public  $allservices=[];
    public  $payment_service=[];
    public $srvprice=[];
    public  $i=0;
     public function mount(){
        $this->srvprice[0]=0;
        $this->srvprice[1]=0;
        $this->srvprice[2]=0;
        $this->srvprice[3]=0;
        $this->srvprice[4]=0;
        $this->srvprice[5]=0;
        $this->srvprice[6]=0;
        $this->srvprice[7]=0;
        $this->srvprice[8]=0;
        $this->srvprice[9]=0;
        $this->srvprice[10]=0;
        $this->srvprice[11]=0;
        $this->srvprice[12]=0;
        $this->srvprice[13]=0;
        $this->srvprice[14]=0;
        $this->srvprice[15]=0;
        $this->srvprice[16]=0;
        $this->srvprice[17]=0;
        $this->srvprice[18]=0;
        $this->srvprice[19]=0;
        $this->srvprice[20]=0;
         $this->allservices = medical_service::all();
 
             $this->payment_service = [
                 ['service_name' => '', 'service_price' => 1]
             ];
            //  $this->srvprice = payment_service::where('id', $this->clientId)->get();

         }
     
         public function addservice()
         {
            $this->i++;
             $this->payment_service[] = ['service_name' => '', 'service_price' => 1];
             $this->paymentnumos++;
         }
     
         public function removeservice($index)
         {
            $this->i--;
             unset($this->payment_service[$index]);
             $this->payment_service = array_values($this->payment_service);
             $this->paymentnumos--;
         }
         public function changeEvent($value)
         {
            $this-> srvprice[$this->i] = medical_service::where(['service_name' => $value])->pluck('service_price')->first();
         }
    public function render()
    {
        return view('livewire.payment-service',['paymentnumos'=>$this->paymentnumos,'srvprice'=>$this->srvprice]);
    }
}
