<?php

namespace app\admin\validate;
use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'userid' => 'require',
        'password' => 'require',
    ];

    protected $message = [
        'userid' => '请输入用户名',
        'passwd' => '请输入密码',
    ];

}
