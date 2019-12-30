<?php
namespace RedshopBase\Helper\Database;

use foo\bar\Exception;
use Joomla\Component\Media\Administrator\Exception\FileExistsException;
use RedshopBase\Helper\JsonHelper;

final class DBHelper
{
    static private $dbConfig;

    static private $dbo;

    private function __construct()
    {
        // Prevent using new obj
    }

    public static function getDbo()
    {
		if (self::$dbo !== null)
		{
			return self::$dbo;
		}

		self::$dbo = new \stdClass();

		self::$dbo->dbConfig = self::initConfig();


    }

    private function initConfig()
    {
        if (self::$dbConfig === null)
        {
            // TODO: get config from file config.

            try {
                JsonHelper::parse(__DIR__ . '/dbhelper-config.json');
            }
            catch (FileExistsException $e)
            {
                throw $e;
            }
        }

        return self::$dbConfig;
    }
}