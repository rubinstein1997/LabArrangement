<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{

    public function index()
    {
        if(session('user_id')) {
        if(session('user_type')=="admin")
            $this->redirect('/admin');
        if(session('user_type')=="teacher")
            $this->redirect('/teacher');
        }
        else
            $this->redirect('/login');


    }




}
