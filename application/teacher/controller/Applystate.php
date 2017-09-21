<?php

namespace app\teacher\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Session;


class Applystate extends Common
{


    public function applystate()
    {
        $teacher_id =  Session::get('user_id');
        $coursestate = Db::table('course')->where("teacher_id = $teacher_id and state = 0")->select();

        $this->assign('state',$coursestate);
        $this->assign('url',"2");
        return $this->fetch();
    }

    public function applyhistory()
    {
        $teacher_id =  Session::get('user_id');
        $applyhistory = DB::table('course_history')->where("teacher_id = $teacher_id")->order("course_history_id ASC")->select();
        $this->assign('history', $applyhistory);
        $this->assign('url',"3");
        return $this->fetch();
    }

}
