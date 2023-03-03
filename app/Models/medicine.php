<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
   // use HasFactory;
   protected $fillable=[

      'medicine_name',
      'medicine_category',
    'medicine_stock',
     'expire_date',
     'unit_price',
      'reorder_point',
   ];

}
