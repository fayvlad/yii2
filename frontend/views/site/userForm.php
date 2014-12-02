<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
?>
<?php
if(Yii::$app->session->hasFlash('success')){
    echo Yii::$app->session->getFlash('success');
}

?>


<?php $form = ActiveForm::begin();?>
<?= $form->field($model,'name');?>
<?= $form->field($model,'email');?>

<?= html::submitButton('Submit',['class'=>'btn btn-succes']);