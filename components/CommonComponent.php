<?php
namespace app\components;

use Yii;
use yii\base\Component;

class CommonComponent extends Component{
    public function getToken(){
        return "asdgfsd";
    }

     public function getData(){
        $data = Yii::$app->db->createCommand('select * from surveys')->queryAll();
        return $data;
        return "asdgfsd";
    }
}