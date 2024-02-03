<?php 

class Validator {
    public static function isEmptyString($value) {
        return strlen($value) !== 0;
    }

    public static function isNumber($value) {
        return is_numeric($value);
    }

    public static function isEmail($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function minLength($value) {
        return strlen($value) >= 8;
    }

    public static function isString($value, $minLength, $maxLength) {
        return strlen($value) >= $minLength && strlen($value) <= $maxLength;
    }

}