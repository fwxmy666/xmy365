<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeUsers extends Model
{
    //
    public $timestamps = false;

    protected $table = 'homeusers';

    protected $primarykey = 'uid';
}
