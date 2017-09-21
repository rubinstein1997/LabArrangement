<?php

namespace app\teacher\controller;


use app\common\model\Course;
use think\Db;
use think\Request;

class Entry extends Common
{
    public function mycourse()
    {
        $requirements = [
            'weekstart' => 1,
            'weekend' => 10
        ];
        if (request()->isPost()) {
            $requirements['weekstart'] = input('post.week1');
            $requirements['weekend'] = input('post.week2');
        }


        $course = (new Course())->mycourse($requirements);
        $this->assign("select",$requirements);
        $this->assign('course',$course);
        $this->assign('url',"0");

        return $this->fetch();
    }
    
    
    public function index()
    {
        $requirements = [
            'lab' => 201,
            'weekstart' => 1,
            'weekend' => 10
        ];
        if (request()->isPost()) {
            $requirements['lab'] = input('post.lab');
            $requirements['weekstart'] = input('post.week1');
            $requirements['weekend'] = input('post.week2');
        }


        $course = (new Course())->courseview($requirements);
        $lab = Db::table('laboratory')->select();
        $this->assign('lab', $lab);
        $this->assign("select",$requirements);
        $this->assign('course',$course);
        $this->assign('url',"1");
        return $this->fetch('index');
    }

    public function courseapply()
    {
        if (Request::instance()->isAjax()) {
            $applyresult = (new Course())->courseapply(input('post.'));
            return $applyresult;
        }
    }
}