<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class FirstController extends Controller
{
   public function actionIndex()
   {

    // url = first/index
       $hello = 'Hello, World!';
       echo $hello;
       die;
       //sreturn $this->render('index', compact('hello'));
   }

   public function actionTest()
   {

    // url = first/test
       $hello = 'test, World!';
       echo $hello;
       die;
       //sreturn $this->render('index', compact('hello'));
   }

   public function actionTestFirst()
   {

    // url = first/test-first
       $hello = 'test-first, World!';
       echo $hello;
       die;
       //sreturn $this->render('index', compact('hello'));
   }

   public function actionTest_second()
   {

    // url = first/test
       $hello = 'test_second, World!';
       echo $hello;
       die;
       //sreturn $this->render('index', compact('hello'));
   }


}
