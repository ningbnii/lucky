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
function trimall($str){
    $qian=array(" ","　","\t","\n","\r");
    return str_replace($qian, '', $str);
}

// 组合
function combination($a, $m) {
    $r = array();

    $n = count($a);
    if ($m <= 0 || $m > $n) {
        return $r;
    }

    for ($i=0; $i<$n; $i++) {
        $t = array($a[$i]);
        if ($m == 1) {
            $r[] = $t;
        } else {
            $b = array_slice($a, $i+1);
            $c = combination($b, $m-1);
            foreach ($c as $v) {
                $r[] = array_merge($t, $v);
            }
        }
    }

    return $r;
}