<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_group extends Model
{
    // use HasFactory;
    protected $table='contact_groups';
    protected $fillable=[
        'user_id',
        'group_name'
    ];
}
