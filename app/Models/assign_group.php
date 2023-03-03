<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign_group extends Model
{
    use HasFactory;
    protected $fillable=[

'assignment_id',
'group_name',
    ];
    public function assignment()
    {
        return $this->belongsTo('App\assignment','assignment_id' );
    }
}
