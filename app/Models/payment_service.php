<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_service extends Model
{
   // use HasFactory;
   protected $table = 'payment_services';

   protected $fillable=[

      'service_name',
      'service_price',
      'payment_id',
   ];
   public function payment()
   {
       return $this->belongsTo('App\payment','payment_id' );
   }
}
