<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午5:48
 */

namespace App\Services\ExpressionWrapper;

use App\Services\Context\Context;

interface IExpressionWrapper {
    public function check(Context $context);
}