<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 07.01.17
 * Time: 15:04
 */
//REST API Постов (редактирование,удаление, добавление)


namespace app\models\admin;


use yii\db\ActiveRecord;

class Post extends ActiveRecord
{

    public static function tableName()
    {
        return 'post';
    }

    public function rules()
    {
        return [
            [['title', 'name'], 'required'],
            [['name'], 'string'],
            [['title'], 'string']
        ];
    }

}