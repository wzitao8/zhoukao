<?php

namespace App\Http\Controllers\Photo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function lists(){
        print_r($_GET);
        $code = $_GET['code'];
        //获取access_token
        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.env('WX_APP_ID').'&secret='.env('WX_APP_SEC').'&code='.$code.'&grant_type=';
        $response = json_decode(file_get_contents($url),true);
        print_r($response);
        $access_token=$response['access_token'];
        $openid = $response['openid'];
        //获取用户信息
        $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token.'&openid='.$openid.'&lang=zh_CN';
    }
}
