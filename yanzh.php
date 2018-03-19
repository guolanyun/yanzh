<?php
/**
 * Created by PhpStorm.
 * User: GuoLanyun
 * Date: 2018/3/19
 * Time: 20:33
 */
header("content-type:text/html;charset=utf8");

$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

if($user == 'admin' && $pass == '123456'){
//    $mess='登录成功';
    $href='index.html';
}else{
//    $mess='登录失败';
    $href='yanzheng.html';
}

//include_once "mess.html";

//$user = $_GET['user'];
//$pass = $__GET['pass'];
//if ($user == 'admin' && $pass == '123456') {
//    echo '登录成功';
//} else {
//    echo '登录失败';
//}
