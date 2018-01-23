<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 1，官方路由，易读性差，不够简洁
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];

// 2，动态注册
use think\Route;
// http://localhost/zerg/public/index.php/sample/test/hello
// 变成访问地址： http://localhost/zerg/public/index.php/hello
// Route::rule('hello', 'sample/Test/hello'); 

// 路由传参数
// url:  /hello/123?name=zhang
// 
// php 文件编写 添加 $id 获取 123，    $name 获取 ?name=zhang
// 
// 代码---------------------
// class Test
// {
//     public function hello($id, $name)
//     {
//         echo $id;
//         echo '|';
//         echo $name;
//     }
// }

Route::post('hello/:id', 'sample/Test/hello');

