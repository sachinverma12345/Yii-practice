<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class FirstController extends Controller
{
    public function actionIndex()
    {
        $data = Yii::$app->db->createCommand('select * from users')->queryAll();
        echo "<pre>";
        print_r($data);
        // url = first/index
        $hello = 'Hello, World!';
        echo $hello;
        die;
        //sreturn $this->render('index', compact('hello'));
    }

    public function actionTestDb()
    {

        // url = first/test
        $hello = 'test, World!';
        echo $hello;
        $data = Yii::$app->db2->createCommand('select * from users')->queryAll();
        echo "<pre>";
        print_r($data);
        die;
        //sreturn $this->render('index', compact('hello'));
    }

    public function actionTestFirst()
    {

        // url = first/test-first
        //    $hello = 'test-first, World!';
        //    echo $hello;
        //    die;
        $this->layout = false;
        $response = [];
        $response['name'] = "Sachin";
        $response['list'] = ['test', 'demo', 'crud'];

        return $this->render('test', $response);
    }

    public function actionTest_second()
    {

        // url = first/test_second
        //    $hello = 'test_second, World!';
        //    echo $hello;
        //    die;
        //render patrial not use the layout
        $response = [];
        $response['name'] = "Sachin";
        $response['list'] = ['test', 'demo', 'crud'];
        return $this->render('test', $response);
        //sreturn $this->render('index', compact('hello'));
    }

    public function actionInfo()
    {
        $data = Yii::$app->request->get();
        print_r($data);
        echo "info page";
    }
    public function actionDemo()
    {
        $data = Yii::$app->request->get();
        print_r($data);
        echo "info page";
    }
}
