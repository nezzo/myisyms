<?php

namespace app\models\admin;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Login extends Model
{
    public $login;
    public $pass;


    /*Функция по обязательным заполнениям полям*/
   public function rules()
    {
        return [
            // username and password are both required
            [['login', 'pass'], 'required'],
            // password is validated by validatePassword()
            ['pass', 'validatePassword'],
        ];
    }

    /*Функция по валидации пароля (принимаем от пользователя  данные с формы), генерация хэширования пароля*/
    function validatePassword($user){
        $rows = (new \yii\db\Query())
            ->select(['login','pass'])
            ->from('admin')
            ->where(['id' => '1'])
            ->all();

        $cod = 'Q2FsbGlz';

        foreach($rows as $cod_base){
            $admin_pass = $cod_base['pass'];
            $admin_login = $cod_base['login'];

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

            $nano_hash = md5(sha1($user['pass']));
            $options = [
                'cost' => 7,
                'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
            ];
            $pass_hash = base64_encode(password_hash($nano_hash, PASSWORD_BCRYPT, $options)."\n");

            $code = crypt($pass_hash,$nano_hash);

            /*Проверка пароля на правильность*/
            if (hash_equals($code_base, $code) and $admin_login == $user['login'] ){
                 return true;
            }else{
                return false;
            }

        }


    }





}
