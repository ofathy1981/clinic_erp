<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_devices extends Model
{
   // use HasFactory;
   protected $fillable=[

     'name',
     'type',
     'status',
      'lat_maintainance_date',
     'for_medical_service',
   ];
}
