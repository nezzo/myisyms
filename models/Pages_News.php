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
 * Description of Pages_News
 *
 * @author nestor
 */
class Pages_News extends Model {
    
    function pages_get($id){
        $rows = (new \yii\db\Query())
        ->select(['id','name','meta-title','meta-description','description','keywords','data'])
        ->from('news_blogpost')
        ->where(['id' => (int)$id])
        ->all();

        return $rows;

     }

    public function news_widget(){
        $rows = (new \yii\db\Query())
            ->select(['id','name'])
            ->from('news_blogpost')
            ->limit(5)
            ->orderBy([
                'data' => SORT_DESC
            ])
            ->all();
        return $rows;
    }
}
