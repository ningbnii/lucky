<?php

namespace app\index\controller;

use app\index\model\Source;

class Index
{
    public function index()
    {
        // 实例化一个http客户端
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://www.pceggs.com']);
        $jar = new \GuzzleHttp\Cookie\CookieJar();
        $domin = '.pceggs.com';
        $values = ['.ADWASPX7A5C561934E_PCEGGS' => '06D030F274C5572CF0016144939F54BA648236170BB0849D4A394D3D9422758EABB014CB0D684AF1EC6DD18C36E4D065375E11DB0C0FCC4860F823CDDD35CB31558A9BEF7C7B5D076FB1A5646E39E84111C85C444A7465F3113537B9E1F0C4845AB0291BBD6BD14C347012047749AB9967E8D13CEEE615F7848696ECCA2727193B06D9F8'];
        $cookieJar = $jar::fromArray($values, $domin);

        // 发送HTTP请求
        $response = $client->request('GET', '/play/pxya.aspx', [
            'cookies' => $cookieJar
        ]);

        $body = $response->getBody();
        $html = (string)$body;

        // 采集规则
        $rules = [
            'title' => ['.xy2820131227_l', 'text']
        ];
        $data = \QL\QueryList::Query($html, $rules)->data;
        $title = trimall($data[0]['title']);

        $params = [];
        $params['periods'] = mb_substr($title, 8, 6);

        $params['num1'] = mb_substr($title, 20, 1);

        $params['num2'] = mb_substr($title, 22, 1);

        $params['num3'] = mb_substr($title, 24, 1);

        $params['sum'] = $params['num1'] + $params['num2'] + $params['num3'];
        $data = Source::get(['periods' => $params['periods']]);
        if (!$data) {
            $source = new Source($params);
            $source->save();
        }

        $list = Source::order('id desc')->paginate(100);
        $params['list'] = $list;

        $params['forecast'] = $this->test($params['periods']);

        return view('index', $params);
    }

    private function test($periods)
    {
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
        return $forecast;
    }
}
