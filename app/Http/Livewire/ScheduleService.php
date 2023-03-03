<?php

namespace App\Http\Livewire;
use app\Models\schedule_service,App\Models\medical_service;
use Livewire\Component;
use Illuminate\Http\Request;

class ScheduleService extends Component
{
   public $totalpmnt=0; 
   public $numos=1;
   public  $allservices=[];
   public  $schedule_service=[];
   public $srvprice=[];
   public  $i=0;
   public $status="";
    public function mount(){
       
        // for($this->i=0;$this->i<100;$this->i++){

        //     $this->srvprice[$this->i]=0;
        // }
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

            $this->schedule_service = [
                ['service_name' => '', 'service_price' => 0]
            ];
        }
    
        public function addservice()
        {

               $this->i++;
               $this->status="";
            $this->schedule_service[] = ['service_name' => '', 'service_price' => 0];
         
    //         foreach($this->schedule_service as $x=>$y){
    //   $this->totalpmnt= $this->totalpmnt+$this->schedule_service[2];
    //         }
            $this->numos++;
        }
    
        public function removeservice($index)
        {
            $this->i--;
            unset($this->schedule_service[$index]);
            $this->schedule_service = array_values($this->schedule_service);
            $this->numos--;

        }
        public function changeEvent($value,$index)
        {
            $request=request();
            // dd($request->all());
            $this-> srvprice[$index] = medical_service::where(['service_name' => $value])->pluck('service_price')->first();
            if($value){
            $this->status="";
        }
        }
    public function render()

    {
        
        return view('livewire.schedule-service',['numos'=>$this->numos,'srvprice'=>$this->srvprice,'status'=>$this->status]);
    }
}
