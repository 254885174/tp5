<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function jsoN($data){
    if($data === false){
        $arr = [];
        $arr['status'] = false;
        $arr['data'] = '操作失败';
        return json_encode($arr);
    }
    $arr = [];
    $arr['status'] = true;
    $arr['data'] = $data;
    return json_encode($arr);
}
