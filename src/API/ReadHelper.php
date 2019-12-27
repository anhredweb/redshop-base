<?php
namespace RedshopBase\API;

use RedshopBase\Helper\JsonHelper;

class RedshopAPIHelper
{
    public static function read($target)
    {
        $json = json_encode($target);

        self::prepareHTMLHeader();

        http_response_code(200);
        echo $json;
    }

    private static function prepareHTMLHeader()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
    }
}