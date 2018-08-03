<?php
namespace App\Services\Expression;

/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午4:37
 * 条件判断
 */

use App\Services\Context\Context;

interface IExpress {
    public function check(Context $content);
}