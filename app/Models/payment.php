<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table = 'payments';

    //use HasFactory;
    protected $fillable=[ 
            'patient_name',
            'cid',
            'pament_date',
            'total',
        
        ];
     public function payment_service()
        {
            return $this->hasMany('App\Models\payment_service');
     } 
     public function payment_medicine()
        {
         return $this->hasMany('App\Models\payment_medicine');
     } 
}
