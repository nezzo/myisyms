<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\admin\Login;


class AdminController extends Controller {

    public function actionLogin()
    {
        $login = new Login();

        $cod = 'Q2FsbGlz';
        $cod1 = $login->get_admin();

        foreach($cod1 as $cod_base){
            $admin_pass = $cod_base['pass'];

            /*Пароль с базы*/
            $pass_base = base64_decode($cod.$admin_pass);

            $nano_hash_base = md5(sha1($pass_base));
            $options_base = [
                'cost' => 7,
                'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
            ];
            $pass_hash_base = base64_encode(password_hash($nano_hash_base, PASSWORD_BCRYPT, $options_base)."\n");

            $code_base = crypt($pass_hash_base,$nano_hash_base);


            /*Пароль тот что ввел пользователь*/

            $pass = "Callisto821";

            $nano_hash = md5(sha1($pass));
            $options = [
                'cost' => 7,
                'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
            ];
            $pass_hash = base64_encode(password_hash($nano_hash, PASSWORD_BCRYPT, $options)."\n");

            $code = crypt($pass_hash,$nano_hash);

            /*Проверка пароля на правильность*/
            if (hash_equals($code_base, $code)){
                $res = "good";
                echo $res;

            }else{
                $res = "fail";
                echo $res;
            }


        }

        if ($login->load(Yii::$app->request->post()) && $login->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $login,
        ]);







    }


}