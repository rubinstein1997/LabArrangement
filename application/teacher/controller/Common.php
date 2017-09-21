<?php

namespace app\teacher\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        //执行登陆验证
        if(!session('user_id'))
        {
            $this->redirect('/login');
        }
        if(session('user_type')!="teacher")
        {
            $this->redirect('/login');
        }


    }


}
