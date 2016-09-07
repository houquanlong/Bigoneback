<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Day;
header("Content-Type: text/html;charset=utf-8");
class LoginController extends Controller{
   /*
    *后台登录
    * */
   public function actionLogin(){
   	 return $this->renderPartial('login');
   }
}
?>