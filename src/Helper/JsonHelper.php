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

	    $filePath = __DIR__ . '/../Syntax/' . $target . '.json';

	    if (!file_exists($filePath))
	    {
		    return null;
	    }

	    $str = file_get_contents($filePath);

	    return json_decode($str);
    }

    public static function parse($target)
    {
        if (!$target)
        {
            return null;
        }

        if (!file_exists($target))
        {
            return null;
        }

        $str = file_get_contents($target);
        

        return json_decode($str);
    }
}
