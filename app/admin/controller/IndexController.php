<?php

namespace app\admin\controller;

use support\Request;

class IndexController
{
    public function index(Request $request)
    {
        return response('hello admin');
    }


}
