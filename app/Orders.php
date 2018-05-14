<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
   	public $timestamps = false;

    protected $table = 'orders';

    protected $primarykey = 'oid';
}
