<?php

namespace app\controller;

use support\Request;
use support\Db;

class IndexController
{
    public function index(Request $request)
    {
        $users = Db::table('users')->where('name', 'John')->first();
                //Db::connection('mysql')->table('users')->where('name', 'John')->first();
        return response('hello webman' . json_encode($users));
    }

    public function test(Request $request)
    {
        $s = 'test';
        return response($s);
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
