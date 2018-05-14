<?php

namespace App\HomeModel;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public $timestamps = false;

    protected $table = 'message';

    protected $primarykey = 'mid';
}
