<?php
/**
 * Created by PhpStorm.
 * User: Daniyar
 * Date: 11.01.2017
 * Time: 1:47
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{

    //  public $layout = 'basic';

    public function actionIndex(){
        return $this->render('index');

    }

    public function actionShow(){
        $this->layout= 'basic';
        return $this->render('show');

    }



    public function actionTest(){

        $comps = ['CPU', 'RAM', 'VRAM', 'MEMORY'];

         // var_dump(Yii::$app);     // беспорядочная распечатка обьектов
        // $this->debug(Yii::$app);    // нормальная распечатка обьекта

        return $this->render('test');

    }




}