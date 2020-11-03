<?php
namespace myFram;

class NotNullValidator extends Validator
{
    public function isValid($value)
    {
        return $value != '';
    }
}