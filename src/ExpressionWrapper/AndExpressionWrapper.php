<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午6:01
 */

namespace App\Services\ExpressionWrapper;


use App\Services\Context\Context;

// 多个and 条件拼接。
class AndExpressionWrapper implements IExpressionWrapper {
    private $wrappers;

    public function __construct($wrappers = array()) {
        $this->wrappers = $wrappers;
    }

    public function check(Context $context) {
        if (count($this->wrappers)) {
            //var_dump(__CLASS__, __FUNCTION__, $this->wrappers);
            foreach ($this->wrappers as $wrappers) {
                $rs = $wrappers->check($context);
                // 如果有一条不满足   就是false
                if ($rs === false) {
                    return false;
                }
            }
        }
        // 没有条件 / 条件都满足
        return true;
    }


} 
