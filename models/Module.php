<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 09.11.16
 * Time: 1:52
 */

namespace app\models;

use Yii;
use yii\base\Model;

class Module extends Model
{
    /*Подсчитываем количество строк в таблице данной категории*/
    public function total(){
        $rows = (new \yii\db\Query())
            ->select(['id'])
            ->from('news_blogpost')
            ->where(['category' => 7])
            ->all();
        return count($rows);
    }

    /*Выводим в раздел "Модули" с базы последние добавленные записи модулей*/
    function rows_modules($offset, $limit){
        $rows = (new \yii\db\Query())
            ->select(['id','name','image','meta-description', 'data', 'time'])
            ->from('news_blogpost')
            ->where(['category' => '7'])
            ->offset($offset)
            ->limit($limit)
            ->orderBy([
                'time' => SORT_DESC
            ])
             ->all();

        return $rows;
    }


}