<?php

namespace Weicot\Cms\Model;

use Weicot\Coer\Model;

class Content extends Model
{
    public $table = 'cms';
    public $field = ['id', 'user_id', 'title', 'description', 'status', 'created', 'updated'];
    public static $status = [
        1 => "显示",
        2 => "隐藏",
    ];
    

}
