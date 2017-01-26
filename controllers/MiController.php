<?php

namespace app\controllers;

use Yii;

class MiController extends AppController
{

    public function actionIndex($id = null)
    {
        $hi = 'Переменная hi отображается в виде'; // присвоение переменной
        $comps = ['CPU', 'RAM', 'VRAM', 'MEMORY'];

        if(!$id) $id = 'default';

        return $this->render('index', compact('hi', 'comps', 'id'));
    }

    public function actionBlogPost(){
        //my/blog-post
        return 'Blog Post';

    }

}