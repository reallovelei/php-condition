<?php
/**
 * Created by PhpStorm.
 * User: nemolzhang
 * Date: 18/7/2
 * Time: 下午4:57
 */

namespace App\Services\Context;

use App\Services\Context\Context;

class ModelContext implements Context {
    private $object;

    public function __construct($object) {
        $this->object = $object;
    }

    public function getObj()
    {
        return $this->object;
    }


    // 暂不支持  多级查找 todo后面 增加
    public function getField($field, $value) {
        $model = $this->object->getAttributes();
        echo "field Name is {$field} {$model[$field]}\n";
        $srcval = null;
        if (isset($model[$field])) {
            $srcval = $model[$field];

            if (!is_array($value)) {
                $type = gettype($srcval);
                switch($type) {
                case 'integer':
                    $value = intval($value);    break;
                case "string":
                    $value = strval($value);    break;
                case "double":
                case "float":
                    $value = doubleval($value); break;
                }
            }
        }

        return ['srcval' => $srcval, 'distval' => $value];
    }
} 
