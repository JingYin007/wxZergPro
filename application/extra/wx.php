<?php
/**
 * Created by 二虎哥哥.
 * Author: 二虎哥哥
 * QQ: 505120790
 * Date: 2017/5/23
 * Time: 13:52
 */
return [
    // 个人测试小程序
    'app_id' => 'wx680ed9137317644f',//wx8787213c85f13bc0 wx680ed9137317644f
    'app_secret' => '01de707b2b666e0370a616e691e5e602',//0a78b7e13bef9c3e72b27c093c880622 01de707b2b666e0370a616e691e5e602

    // 微信使用code换取用户openid及session_key的url地址
    'login_url' => "https://api.weixin.qq.com/sns/jscode2session?".
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",

    // 微信获取access_token的url地址
    'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
        "grant_type=client_credential&appid=%s&secret=%s"
];