<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'agent_name',
        'from',
        'to',
        'completness',
        'assign_date',
    ];

    public function assign_contact()
    {
        return $this->hasMany('App\Models\assign_contact');
 }

 public function assign_group()
 {
     return $this->hasMany('App\Models\assign_group');
}
}
