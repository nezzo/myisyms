<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
/**
 * Description of News_index
 *
 * @author nestor
 */

class News_index extends Model{

    /*Выводим на главную с базы последние добавленные записи*/
    function rows_news($offset, $limit){
        $rows = (new \yii\db\Query())
        ->select(['id','name','description', 'data'])
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
            ->select(['id','name','description','keywords','data'])
            ->from('news_blogpost')
            ->all();
        return count($rows);
    }
    
}
