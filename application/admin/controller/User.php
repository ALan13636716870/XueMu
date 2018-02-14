<?php
namespace app\admin\controller;

use think\Controller;

class User extends Controller
{
    public function welcome(){
        return $this ->fetch();
    }
}