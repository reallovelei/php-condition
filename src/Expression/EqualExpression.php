<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午4:41
 */

namespace App\Services\Expression;

use App\Services\Context\Context;

class EqualExpression implements IExpress {

    private $fieldName;
    private $fieldValue;

    public function __construct($fieldName, $fieldValue) {
        $this->fieldName = $fieldName;
        $this->fieldValue = $fieldValue;
    }

    public function check(Context $context) {
        $arr = $context->getField($this->fieldName, $this->fieldValue);
//        var_dump($this->fieldName, $this->fieldValue, $arr);
var_dump(__CLASS__, $arr);
        if ($arr['srcval'] != null) {
            var_dump("----------", $arr['srcval'] == $arr['distval']);
            return $arr['srcval'] == $arr['distval'];
        }

        return false;
    }
} 
