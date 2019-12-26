<?php
namespace RedshopBase\API;

use RedshopBase\Helper\JsonHelper;

class ReadHelper
{
    public static function read()
    {
        $jsonUser = JsonHelper::getJson('user');

        self::prepareHTMLHeader();

        http_response_code(200);
        echo jsonUser;
    }

    private static function prepareHTMLHeader()
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
    }
}