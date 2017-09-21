<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;

class Quit extends Controller
{
    public function quit()
    {
        Session::clear();
        $this->redirect('/login');
    }


}
