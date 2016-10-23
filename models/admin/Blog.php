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
    public function get_all_post(){
        $rows = (new \yii\db\Query())
            ->select(['id','name','image','description','data'])
            ->from('news_blogpost')
            ->all();

        return $rows;

    }

}