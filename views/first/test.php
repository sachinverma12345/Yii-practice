<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\assets\TestAsset;
TestAsset::register($this);
$this->title = 'Test';
$this->params['breadcrumbs'][] = $this->title;

echo $name;
echo "<pre>";print_r($list);
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        This is the Test page. 
    </p>

    <code><?= __FILE__ ?></code>
</div>
