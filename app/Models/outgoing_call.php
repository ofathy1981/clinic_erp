<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outgoing_call extends Model
{
    use HasFactory;
    protected $fillable=[

        'user_id',
        'agent_name',
        'call_date',
        'client_name',
        'client_phone',
        'lastcalldate',
        'recalldate',
        'call_case',
        'notes',
        'call_group',
        'Appointment_status'
    ];
}
