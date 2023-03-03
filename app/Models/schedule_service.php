<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule_service extends Model
{
   protected $table = 'schedule_services';

   // use HasFactory;
   protected $fillable=[

     'service_name',
     'service_price',
     'schedule_id',
   ];

   public function schedule()
   {
       return $this->belongsTo('App\schedule','schedule_id' );
   }
}
