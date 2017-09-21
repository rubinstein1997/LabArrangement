<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin;
use think\Db;

class Login extends Controller
{
    public function login()
    {
        if ($this->request->isPost()) {
            if (input('post.selectid') == "admin") {
                $res = (new Admin())->login(input('post.'));
                if ($res['valid']) {
                    $this->success($res['msg'], '/admin');
                    exit;
                } else {
                    $this->error($res['msg']);
                    exit;
                }
            }
            elseif(input('post.selectid') == "teacher"){
                $teacher_id = input('post.userid');
                $passwd = input('password');

                $res = Db::table('teacher')->where("teacher_id = $teacher_id and passwd = $passwd")->count();
                if ($res) {
                    session('user_id',input('post.userid'));
                    session('user_type',"teacher");

                    $this->success("登录成功", '/teacher');

                    exit;
                } else {
                    $this->error("账户密码不正确");
                    exit;
                }
            }
        }

        return $this->fetch();

    }
}
