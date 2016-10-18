<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    function rows_contact(){
        $rows = (new \yii\db\Query())
        ->select(['email','skype'])
        ->from('contact')
        ->all();
        
        return $rows;
        }
}
