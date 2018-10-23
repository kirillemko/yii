<?php

namespace app\controllers;


use app\models\Goods;
use app\models\Users;
use yii\base\InvalidArgumentException;
use yii\web\Controller;
use yii\web\IdentityInterface;
use yii\web\NotFoundHttpException;



class SiteController extends Controller
{


    public function actionIndex()
    {
        print_r(Users::findOne(1));
        return 1;
    }

    public function actionLogin($login, $pass)
    {
        $user = Users::findOne([ 'login'=>$login ]);
        if( !$user ){
            throw new NotFoundHttpException();
        }

        if( !\Yii::$app->security->validatePassword($pass, $user->pass) ){
            throw new InvalidArgumentException();
        }


        \Yii::$app->user->login($user);
        \Yii::$app->user->logout();
    }

    public function actionRegister($login, $pass)
    {
        $newUser = new Users();
        $newUser->login = $login;
        $newUser->pass = \Yii::$app->security->generatePasswordHash($pass);
        if(!$newUser->save()){
            throw new InvalidArgumentException();
        }
        \Yii::$app->user->login($newUser);
        return 1;
    }
}
