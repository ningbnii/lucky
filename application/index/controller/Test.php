<?php
/**
 * Created by PhpStorm.
 * User: ning
 * Date: 2017/9/8
 * Time: 13:56
 */

namespace app\index\controller;


use app\index\model\Source;

class Test
{
    public function index()
    {
        $periods = input('periods');
        $source1 = Source::get(['periods'=>$periods]);
        $source2 = Source::get(['periods'=>$periods-1]);
        $source3 = Source::get(['periods'=>$periods-2]);
        $arr1 = [$source1->num1, $source1->num2, $source1->num3];
        $arr2 = [$source2->num1, $source2->num2, $source2->num3];
        $arr3 = [$source3->num1, $source3->num2, $source3->num3];
        $total = $arr1[0]+$arr1[2]+$arr2[2]+$arr3[0]+$arr3[2];

        $arr = array_unique(array_merge($arr1, $arr2, $arr3));
        sort($arr);
        $comb = combination($arr,2);
        $result = [];
        foreach($comb as $v){
            $sum = $v[0]+$v[1];
            $result[] = $total - $sum;
        }
        $forecast = array_unique($result);
        sort($forecast);
        dump($forecast);
    }
}