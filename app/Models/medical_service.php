<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_service extends Model
{
   // use HasFactory;
   protected $table='medical_services';
   protected $fillable=[
      'service_name',
      'service_category',
      'service_devices',
      'service_price',


   ];}
