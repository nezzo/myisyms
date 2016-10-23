<?php
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 24.10.16
 * Time: 1:09
 */

namespace app\models\admin;


class CreatePost
{
    public $name_post;
    public $meta_title;
    public $image;
    public $description;
    public $keywords;


    public function rules()
    {
        return [
            // username and password are both required
            [['name_post', 'meta_title'], 'required'],

        ];
    }

    public function post_save ($post){

    }

}