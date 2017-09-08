<?php

namespace app\index\model;

/**
 * Created by PhpStorm.
 * User: ning
 * Date: 2017/9/8
 * Time: 11:55
 */
use think\Model;

class Source extends Model
{
    protected function getDanshuangAttr($value, $data)
    {
        if ($data['sum'] % 2 == 0) {
            return '双';
        } else {
            return '单';
        }
    }

    protected function getDaxiaoAttr($value, $data)
    {
        if ($data['sum'] <= 13) {
            return '小';
        } else {
            return '大';
        }
    }

    protected function getZhongbianAttr($value, $data)
    {
        if ($data['sum'] <= 17 && $data['sum'] >= 10) {
            return '中';
        } else {
            return '边';
        }
    }
}