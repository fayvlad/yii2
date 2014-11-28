<?php
$form = \yii\widgets\ActiveForm::begin(); ?>
<?=$form-> field($model, 'name');?>
<?=$form->field($model,'email');?>
<?=$form->field($model,'password');?>
<?= html::submitButton(Yii::t('app','ok'));?>
<?php \yii\widgets\ActiveForm::end();?>