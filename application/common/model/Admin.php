<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Admin extends Model
{

    protected $pk = 'admin_id'; //主键
    //设置当前模型对应的完整数据表名称
    protected $table = 'admin';



    /**
     * 登录
     */
    public function login($data){
        //1.执行验证
        $validate = Loader::validate('Admin');
        //如果验证不通过
        if(!$validate->check($data)){
            return ['valid'=>0,'msg'=>$validate->getError()];
        }

        //2.比对用户名和密码是否正确
        $userInfo = $this->where('admin_id',$data['userid'])->where('passwd',$data['password'])->find();
        if(!$userInfo)
        {
            //未匹配到相关数据
            return ['valid'=>0,'msg'=>'用户名或密码不正确'];
        }

        //3.将用户信息存入到session中
        session('user_id',$userInfo['admin_id']);
        session('user_type',"admin");
        return ['valid'=>1,'msg'=>'登录成功'];
    }
}
