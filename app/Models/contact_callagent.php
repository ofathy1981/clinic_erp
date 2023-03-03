<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_callagent extends Model
{
    use HasFactory;
    protected $fillable=[
       'user_id',
       'agent_name',
       'contact_name',
       'group_name',
    ];
}
