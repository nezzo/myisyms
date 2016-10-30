<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 30.10.16
 * Time: 3:01
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SeoController extends Controller
{

    /*Создаем robot.txt*/
    public function actionRobot(){
        header("Content-type: text/plain");
        $this->layout = '/seo/white';

        return $this->render('robot');
    }

    /*Создаем файл для гугла googleba0ffbc68b0d9d6e.html*/
    public function actionGoogle(){
        header("Content-type: text/plain");
        $this->layout = '/seo/white';

        return $this->render('google');
    }

}