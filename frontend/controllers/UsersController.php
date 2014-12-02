
<?php
namespace frontend\controllers;
use yii\web\Controller;
use app\models\Users;

class UserController extends Controller{
    public function actionIndex(){
        $users = Users::find()->all();
    return $this->render('index',['users'=>$users]);

    }
}