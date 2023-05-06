<?php

namespace app\controller;

use support\Request;

class UserController
{
    // public function index(Request $request)
    // {
    //     return response('hello user ctrl');
    // }

    public function test(Request $request)
    {
        $s = 'user test';
        return response($s);
    }

    public function get(Request $request, $id)
    {
        $a = $request->route->param();
        return response(json_encode($a) . '---' . $id);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
