<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Day;
header("Content-Type: text/html;charset=utf-8");
class UserController extends Controller{
    /*
     *后台登录
     * */
    public function actionIndex(){
        return $this->render('index');
    }
    /*
    * 用户管理
    * */
    public function actionList(){
        return $this->renderPartial('list');
    }
    /*
    * 黑名单
    * */
    public function actionBlack(){
        return $this->renderPartial('black');
    }
}
?>