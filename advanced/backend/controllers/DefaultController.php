<?php
/**
 * Created by PhpStorm.
 * User: gok11139
 * Date: 2017/9/15
 * Time: 17:04
 */


namespace backend\controllers;

use GoogleAuthenticator\GoogleAuthenticator;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller{


    public function actionIndex(){

        $google = new GoogleAuthenticator();

        // Register application
        echo $google->getQRCodeUrl('ApplicationName');

        // Save secret Key
        $secretKey = $google->getSecretKey();

//        echo $secretKey;




    }

    public function actionLogin()
    {
        echo 1;


    }
}