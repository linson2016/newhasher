<?php
namespace Linson2016\hasher;
class Md5Hasher
{
    /**
     *
     * @param $value
     * @param array $option
     * @return string
     */
    public function make($value, $option = [])
    {
        $salt = isset($option["salt"]) ? $option["salt"] : "";
        return hash("md5",$value.$salt);
    }

    /**
     *
     * @param $value
     * @param $hashValue
     * @param array $option
     * @return bool
     */
    public function check($value, $hashValue, $option= [])
    {
        $salt = isset($option["salt"]) ? $option["salt"] : "";
        return hash("md5",$value.$salt)  === $hashValue;
    }
}