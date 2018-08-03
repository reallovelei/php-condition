<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午6:11
 */

namespace App\Services\ExpressionWrapper;


use App\Services\Expression\IExpress;
use App\Services\Context\Context;

class ExpressionWrapper implements IExpressionWrapper {
    private $expression;

    public function ExpressionWrapper(IExpress $expression) {
        $this->expression = $expression;
    }

    public function check(Context $context) {
        return $this->expression->check($context);
    }
}