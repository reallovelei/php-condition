<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午4:41
 */

namespace App\Services\Expression;

use App\Services\Context\Context;

class LtExpression implements IExpress {

    private $fieldName;
    private $fieldValue;

    public function __construct($fieldName, $fieldValue) {
        $this->fieldName = $fieldName;
        $this->fieldValue = $fieldValue;
    }

    public function check(Context $context) {
        $values = $context->getField($this->fieldName, $this->fieldValue);

        if ($values['srcval'] != null) {
            return $values['srcval'] < $values['distval'];
        }

        return false;
    }
} 