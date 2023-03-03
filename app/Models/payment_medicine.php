<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_medicine extends Model
{
   // use HasFactory;
   protected $table = 'payment_medicines';

   protected $fillable=[

      'medicine_name',
      'medicine_quantity',
      'unit_price',
      'payment_id',
      'total'
   ];
   public function payment()
   {
       return $this->belongsTo('App\payment','payment_id' );
   }
}
