<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable=[
        'id','full_name','email','message'
    ];
}
