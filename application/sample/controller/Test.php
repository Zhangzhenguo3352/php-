<?php
namespace app\sample\controller;
// 第一种获取 参数
// class Test
// {
//     public function hello($id, $name, $age)
//     {
//         echo $id;
//         echo '|';
//         echo $name;
//         echo '|';
//         echo $age;
//     }
// }

// // 第二种获取 参数
// use think\Request;

// class Test
// {
//     public function hello()
//     {	
//     	//param 不区分get 或 post 类型都能获取
//     	$id = Request::instance()->param('id');
//     	$name = Request::instance()->param('name');
//     	$age = Request::instance()->param('age');
//         echo $id;
//         echo '|';
//         echo $name;
//         echo '|';
//         echo $age;
//     }
// }

// // 第二种获取 参数（ 获取 所有参数）
// use think\Request;

// class Test
// {
//     public function hello()
//     {	
//     	//param 不区分get 或 post 类型都能获取
//     	$all = Request::instance()->param();
//     	var_dump($all);
//     }
// }

// // 第二种获取 参数（ 获取 ？后面的所有参数）
// use think\Request;

// class Test
// {
//     public function hello()
//     {	
//     	//param 不区分get 或 post 类型都能获取
//     	$all = Request::instance()->get();
//     	var_dump($all);
//     }
// }

// // 第二种获取 参数（ 获取 路径参数）
// use think\Request;

// class Test
// {
//     public function hello()
//     {	
//     	//param 不区分get 或 post 类型都能获取
//     	$all = Request::instance()->route();
//     	var_dump($all);
//     }
// }


// // 第二种获取 参数（ 获取 age）
// use think\Request;

// class Test
// {
//     public function hello()
//     {	
//     	//param 不区分get 或 post 类型都能获取
//     	$all = Request::instance()->post();
//     	var_dump($all);
//     }
// }


// 第二种获取 参数（ 获取 参数简写）
use think\Request;

class Test
{
    public function hello()
    {	
    	//param 不区分get 或 post 类型都能获取
    	$all = input('param.');
    	$id = input('param.id');
    	$name = input('param.name');
    	$age = input('param.age');
    	var_dump($all);
    	var_dump($id);
    	var_dump($name);
    	var_dump($age); 
    }
}

