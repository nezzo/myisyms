<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 31.10.16
 * Time: 13:49
 */

namespace app\models\admin;

use Yii;
use yii\base\Model;
/*Получаем  количество пользователей с базы*/
class Count
{
    /*Проверяем были ли уже подключения за сегодня*/
    public function old_connects(){
        $date = date("d-m-Y");
        $rows = (new \yii\db\Query())
            ->select(['visit_id'])
            ->from('visits')
            ->where(['date'=>$date])
            ->all();

        foreach ($rows as  $id){
            $ip_id = $id['visit_id'];
        }
        return $ip_id;

    }

    /*Добавляем новый ip адресс пользователя)*/
    public function user_ip($ip){
        $date = date("d-m-Y");
        $save = Yii::$app->db->createCommand()
            ->insert('ips_user', [
                'date' => $date,
                'ip_address' => $ip,
             ])->execute();

        return $save;
    }

    /*Устанавливаем количество просмотров в базу*/
    public function update_visits(){
        $date = date("d-m-Y");
        $save = Yii::$app->db->createCommand()
            ->insert('visits', [
                'date' => $date,
                'hosts' => 1,
                'views' => 1,
            ])->execute();

        return $save;


    }

    /*Метод по удалению ip адрессов с базы*/
    public function dell_ips($date){
        $del = Yii::$app->db->createCommand()->delete('ips_user', 'date=:date', array(':date'=> (int) $date))->execute();
        return $del;
    }

    /*Получаем ip адресс с базы*/
    public function get_ip_adress($ip){
        $rows = (new \yii\db\Query())
            ->select(['ip_address'])
            ->from('ips_user')
            ->where(['ip_address'=> $ip])
            ->all();

            foreach ($rows as  $ip_adress){
                $ip_adr = $ip_adress['ip_address'];
            }
         return $ip_adr;
    }

    // Добавляем для текущей даты +1 просмотр (хит)
    public function update_hit(){
        $date = date("d-m-Y");


        $save = Yii::$app->db->createCommand("update {{visits}} set views=views+1 WHERE `date` = '$date' ")
          //  ->where(['date'=> $date])
            ->execute();
        return $save;

    }

    // Добавляем в базу +1 уникального посетителя (хост) и +1 просмотр (хит)
    public function update_host_hit(){
        $date = date("d-m-Y");
        $save = Yii::$app->db->createCommand("update {{visits}} set views=views+1, hosts=hosts+1 WHERE `date` = '$date' ")
           ->execute('date=:date', array(':date'=>  $date));

        return $save;

    }

    public function select_data(){
        $date = date("d-m-Y");
        $rows = (new \yii\db\Query())
            ->select(['date','hosts','views'])
            ->from('visits')
            ->where(['date'=>$date])
            ->all();

        return $rows;
    }



}