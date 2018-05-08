<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/8
 * Time: 14:49
 */
namespace backend\Controllers;

use EasyWeChat\Factory;
use yii\web\Controller;

class WechatController extends Controller
{

    public function actionIndex()
    {
        echo $_GET['echostr'];
        /*$config = [
            'app_id'=>'wxbbd06c6491fa437c',
            'secret'=>'c86f519a83d31e1ded005799b5625872',
            'response_type'=>'array',
            'log'=>[
                'level'=>'debug',
                'file'=>__DIR__.'/wechat.log',
            ]
        ];
        $app = Factory::officialAccount($config);
        $response = $app->server->serve();
        $response->send();*/
    }
}