<?php
namespace frontend\models;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use yii\base\Model;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class UserForm extends Model{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name','email'],'required'],
                ['email','email'],
            ];
    }
}