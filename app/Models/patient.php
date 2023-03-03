<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
   // use HasFactory;
   protected $fillable=[

      'first_name',
      'father_name',
      'nationality',
      'patient_type',
      'file_number',
      'social_case',
      'mobile',
      'cid',
      'gender',
      'date_of_birth',
      'email',
      'tel',
      'address_area',
      'address',
      'blood_type',
      'smoking',
      'weight',
      'length',
      'known_us_from',
      'job',
      'work_address',
      'case',
      'has_allegric_to_medicine',
      'credit_balance',
      'debit_balance',
   ];
}


