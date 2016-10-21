<?php

#@TODO Нужно настроить модель и контроллер на прием данных с формы и редирект в админку (нужно придумать) имя админки + создание сесси если пароли
#@TODO подходят
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
    function get_admin(){
        $rows = (new \yii\db\Query())
            ->select(['login','pass'])
            ->from('admin')
            ->where(['id' => '1'])
            ->all();

        return $rows;


    }
    public function rules()
    {
        return [
            // username and password are both required
            [['login', 'pass'], 'required'],
            // password is validated by validatePassword()
            ['pass', 'validatePassword'],
        ];
    }

}
