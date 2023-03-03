<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
   // use HasFactory;
   protected $fillable=[       

                  'patient_name',
                  'cid',
                  'nurse',
                  'room',
                  'work',
                  'doctor',
                  'known_us_from',
                  'sp_beuty',
                  'duration',
                  'case',
                  'notes',
                  'total_payment',
                  'total_number_of_services',
                  'schedule_status',
                  'user_id',    
                  'schedule_start',
                  'schedule_end',
               ];


               public function schedule_service()
               {
                   return $this->hasMany('App\Models\schedule_service');
            }               
                  }
