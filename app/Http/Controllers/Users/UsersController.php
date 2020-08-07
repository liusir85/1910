<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * 注册视图
     */
    public function regs()
    {
        return view('users.regs');
    }

    public function regsDo(Request $request){
        header("content-type:text/html;charset=utf-8");
        $qname=$_POST['qname'];
        $qmima=$_POST['qmima'];
        $qtel=$_POST['qtel'];

        if(empty($qname)){
            die("用户名不能为空");
        }
        if(empty($qmima)){
            die("密码不能为空");
        }
        if(empty($qtel)){
            die("手机号名不能为空");
        }

        $link=mysqli_connect('192.168.128.112','root','root','exam1910');
        $sql="insert into users(qname,qmima,qtel) values('$qname','$qmima','$qtel')";
        $res=mysqli_query($link,$sql);

        if($res){
            echo "注册成功";
            header("refresh:2,url='denglu.html'");
        }else{
            echo "注册失败";
            header("refresh:2,url='zhuce.html'");
        }
    }

    /**
     * 登录视图
     */
    public function logins()
    {
        return view('users.logins');
    }

    /**
     * 执行登陆
     */
    public function loginsDo(Request $request)
    {
        header("content-type:text/html;charset=utf-8");
        $qname=$_POST['qname'];
        $qmima=$_POST['qmima'];


        if(empty($qname)){
            die("用户名不能为空");
        }
        if(empty($qmima)){
            die("密码不能为空");
        }

        $link=mysqli_connect('192.168.128.112','root','root','exam1910');
        $sql="select * from users where qname='$qname' and qmima='$qmima'";
        $res=mysqli_query($link,$sql);
        $arr=mysqli_fetch_assoc($res);


        if($arr){
            echo "登入成功";
            header("refresh:2,url='watch.html'");
        }else{
            echo "登入失败";
            header("refresh:2,url='zhuce.html'");
        }
    }
}