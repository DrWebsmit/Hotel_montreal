<?php
/**
 * Created by PhpStorm.
 * User: Daniyar
 * Date: 11.01.2017
 * Time: 1:43
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{

public function debug($arr) {

    echo '<pre>' . print_r($arr, true) . '</pre>';  // Доступная распечатка в контроллерах
}

}

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';  // Доступная распечатка в видах

    //отображения в видах  <?= app\controllers\debug(Yii::$app);
}