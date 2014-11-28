<?php
namespace frontend\controllers;
class MyController extends \yii\web\Controller
{
	public function actionOne()
{
	$this->one();
}

	public function One()
{
echo"Controller = My";
echo "<br/>";
echo"action = One";
echo "<br/>";
echo ("link = yii/frontend/web/index.php?r=my/one");
}
}
