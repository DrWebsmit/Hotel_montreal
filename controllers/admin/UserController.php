<?php

namespace app\controllers\admin;
use app\controllers\AppController;

class UserController extends AppController
{
    public $layout = 'basic';

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionNews(){
        return $this->render('news');
    }

    public function actionGallery(){
        return $this->render('gallery');
    }
}