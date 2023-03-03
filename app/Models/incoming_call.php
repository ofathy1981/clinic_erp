<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incoming_call extends Model
{
    use HasFactory;
    protected $fillable=[

        'user_id',
        'agent_name',
        'call_date',
        'name',
        'phone',
        'lastcalldate',
        'recalldate',
        'call_case',
        'notes',
        'call_group',
        'Appointment_status'
    ];
}
