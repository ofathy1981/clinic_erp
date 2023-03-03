<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class call_agent extends Model
{
    use HasFactory;
    protected $fillable=[
        'login',
        'user_id',
        'agent_name',
        'phone',
    ];
}
