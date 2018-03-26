<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable =[
        'client_code',
        'work_order',
        'photo',
        'position',
        'state',
        'user_id'
    ];
}
