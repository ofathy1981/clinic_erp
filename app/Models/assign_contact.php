<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_contact extends Model
{
    use HasFactory;
    protected $fillable=[
    'assignment_id',
    'contact_name',
    'status'
    ];
    public function assignment()
    {
        return $this->belongsTo('App\assignment','assignment_id' );
    }
}
