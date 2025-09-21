<?php

namespace app\controllers;
use app\models\Surveys;

class SurveyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        echo "<pre>";
        $data = Surveys::find()->all();
        print_r($data);

        return $this->render('index');
    }

    public function actionInsert()
    {
        echo "<pre>";
        $data = new Surveys;
        $data->title = "Hello title";
        $data->survey_id = "TEST_555";
        $data->description = "Hello title Thiss is the description";
        $data->save();
        print_r($data);

        return $this->render('index');
    }

    public function actionUpdate()
    {
        echo "<pre>";
        $data = Surveys::findOne(36);
        $data->title = "Hello title updated";
        $data->survey_id = "TEST_555_66";
        $data->description = "Hello title Thiss is the description updated ";
        $data->save();
        print_r($data);

        return $this->render('index');
    }

    public function actionDelete()
    {
        echo "<pre>";
        $data = Surveys::findOne(36);
        $data->delete();

        return $this->render('index');
    }

    public function actionShow()
    {
       
       // $data = Surveys::findOne(35);
        // $data = Surveys::find()->where(['id'=>[12,34,22],'title'=>'sachin'])
        $data = Surveys::find()->where(['id'=>[12,34,22]])
        ->groupBy('title')
        ->orderBy('id')
        //echo $data->createCommand()->getRawSql();

         ->all();
        print_r($data);
        die;

        return $this->render('index');
    }

}
