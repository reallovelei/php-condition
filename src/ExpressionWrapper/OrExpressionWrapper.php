<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午6:01
 */

namespace App\Services\ExpressionWrapper;


use App\Services\Context\Context;

// 多个or 条件拼接。
class OrExpressionWrapper implements IExpressionWrapper {
    private $wrappers;

    public function __construct($wrappers = array()) {
        $this->wrappers = $wrappers;
    }

    public function check(Context $context) {
        if (count($this->wrappers)) {
            foreach ($this->wrappers as $wrappers) {
                // 有一条 匹配就可以了
                if ($wrappers->check($context)) {
                    return true;
                }
            }
        }
        // 没有一条匹配的 则返回false
        return false;
    }


} 