<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Users $model */
/** @var ActiveForm $form */
?>
<div class="demo-demo_home">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'dob') ?>
        <?= $form->field($model, 'profile_image') ?>
        <?= $form->field($model, 'address_1') ?>
        <?= $form->field($model, 'address_2') ?>
        <?= $form->field($model, 'postal_code') ?>
        <?= $form->field($model, 'city') ?>
        <?= $form->field($model, 'state') ?>
        <?= $form->field($model, 'country') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'verification_code') ?>
        <?= $form->field($model, 'verification_code_expire_at') ?>
        <?= $form->field($model, 'email_verified_at') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'remember_token') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'is_blocked') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'type') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- demo-demo_home -->
