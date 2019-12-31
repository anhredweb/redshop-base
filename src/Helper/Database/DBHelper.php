<?php
namespace RedshopBase\Helper\Database;

use foo\bar\Exception;
use RedshopBase\Helper\JsonHelper;

final class DBHelper
{
    static private $dbConfig;

    private function __construct()
    {
        // Prevent using new obj
    }

    public function getDbo()
    {

    }

    private function initConfig()
    {
        if (self::$dbConfig === null)
        {
            // TODO: get config from file config.

            try {
                self::$dbConfig = JsonHelper::parse(__DIR__ . '/dbhelper-config.json');
            }
            catch (Exception $e)
            {
                throw new \ErrorException('Couldn\'t load DB config');
            }
        }

        return self::$dbConfig;
    }
}