<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    public $timestamps = false;


    protected $table = 'goods';


    protected $primarykey = 'id';
}
