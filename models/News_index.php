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
/*Выводим на главную с базы последние добавленные записи*/
class News_index extends Model{
    
    
    function rows_news(){
        $rows = (new \yii\db\Query())
        ->select(['id','name','image', 'description', 'data'])
        ->from('news_blogpost')
        ->limit(9)
        ->all();
        
        return $rows;
        }
    
}
