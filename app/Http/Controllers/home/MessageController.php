<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeModel\Message;
use App\HomeUsers;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $arr = $request->all();
        $num = $request->input('num');
        $search = $request->input('search');


        $res = Message::where('mname','like','%'.$request->input('search').'%')->
        paginate($request->input('num',10));


        // $data = HomeUsers::get();
        $data = [];

        foreach($res as $k=>$v){

            $data[$k] = HomeUsers::where('uid',$v->uid)->first();
            $v->username = $data[$k]->username;
            // dump($v->username);
        }
        // die;
        // dd($res);

        return view('home.message.index',
            ['title'=>'前台用户信息页面','res'=>$res,
              'arr'=>$arr,'num'=>$num,'search'=>$search
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
