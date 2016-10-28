<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 23.10.16
 * Time: 3:30
 */

namespace app\models\admin;

use Yii;
use yii\base\Model;

class Blog extends Model
{

    /*Выводим все новости что есть */
    public function get_all_post($offset, $limit){
        $rows = (new \yii\db\Query())
            ->select(['id','name','meta-title','description','keywords','data'])
            ->from('news_blogpost')
            ->offset($offset)
            ->limit($limit)
            ->orderBy([
                'data' => SORT_DESC
            ])
            ->all();

        return $rows;

    }

    /*Подсчитываем количество строк в таблице*/
    public function total(){
        $rows = (new \yii\db\Query())
            ->select(['id','name','meta-title','description','keywords','data'])
            ->from('news_blogpost')
            ->all();
        return count($rows);
    }

}