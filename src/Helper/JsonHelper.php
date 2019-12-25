<?php
namespace RedshopBase\Helper;

/**
 * Class JsonHelper
 * @package redSHOPBase\Helper
 */
class JsonHelper{

    /**
     * @param $target
     * @return array
     */
    public static function parseSyntaxJson($target)
    {
        if(!$target)
        {
            return array();
        }

        $filePath = 'Syntax/' . $target . '.json';

        if (!file_exists($filePath))
        {
            throw new \ErrorException("Couldnt found JSON of " . $target);
        }

        $str = file_get_contents($filePath);
        $jsonArray = json_decode($str, true);

        return $jsonArray;
    }
}
