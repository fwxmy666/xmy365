<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = false;


    protected $table = 'category';


    protected $primarykey = 'tid';


	

	public function panduan($data)
	{
		if ($data) {

            return redirect('/admin/category')->with('success', '操作成功');

        } else {

            return back()->with('error', '操作失败');
        }
	}

}
