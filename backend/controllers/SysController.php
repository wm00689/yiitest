<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/2/10
 * Time: 21:11
 */

namespace backend\controllers;
use Yii;
use yii\web\Controller;


class SysController extends Controller {

    public function actionDashboard(){

        $name = Yii::$app->cache->get('name');
        return $this->render('dashboard',['name'=>$name]);
    }

    public function actionMenu(){
        return $this->render('menu',['aa'=>'aa']);

    }
}