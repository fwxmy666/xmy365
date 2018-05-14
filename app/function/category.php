<?php
use Illuminate\Http\Request;
	function getName($pid)
	{
		if ($pid == '0') {

			return '顶级分类';
		} else {

			$res = DB::table('category')->where('tid',$pid)->first();

			// dd($res);

			return $res->tname;
		}
	}


	//遍历获取父类或者子类
	function type($res)
	{
		foreach($res as $k => $v) {
                //获取path路径
                $foo = explode(',',$v->path);

                $level  = count($foo)-2;

                $v->tname = str_repeat('&nbsp;&nbsp;&nbsp;',$level).'┠ '.$v->tname;
             }

	}

	



	

	
         
