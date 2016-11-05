<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 05.11.16
 * Time: 1:05
 */

namespace app\models\admin;

use Yii;
use yii\base\Model;

class Category extends Model
{
    /*Выводим все категории что есть */
    public function get_all_category($offset, $limit){
        $rows = (new \yii\db\Query())
            ->select(['id','name_category'])
            ->from('category')
            ->offset($offset)
            ->limit($limit)
            ->orderBy([
                'id' => SORT_DESC
            ])
            ->all();

        return $rows;

    }

    /*Подсчитываем количество строк в таблице*/
    public function total(){
        $rows = (new \yii\db\Query())
            ->select(['id'])
            ->from('category')
            ->all();
        return count($rows);
    }

}