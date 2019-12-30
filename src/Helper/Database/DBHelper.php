<?php
namespace RedshopBase\Helper\Database;

use RedshopBase\Helper\JsonHelper;
use RedshopBase\RedObject\Sys\Dbo;

final class DBHelper
{
    static private $dbConfig;

    static private $dbConn;

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

		self::$dbo = new Dbo();

		self::$dbo->dbConfig = self::initConfig();
    }

    private function initConfig()
    {
        if (self::$dbConfig === null)
        {
            try {
                self::$dbConfig = JsonHelper::parse(__DIR__ . '/dbhelper-config.json');
            }
            catch (Exception $e)
            {
                throw new \ErrorException('Coudn\'t found dbhelper-config.json');
            }
        }

        return self::$dbConfig;
    }

    public function getDBConn()
    {
    	if (self::$dbConfig === null)
	    {
	    	self::initConfig();
	    }

    	$config = self::$dbConfig;

    	$conn = new \mysqli(
    		$config->connectionInfo->host,
		    $config->connectionInfo->user,
		    $config->connectionInfo->password
	    );

    	if ($conn->connect_error)
	    {
	    	throw new \ErrorException('Coundn\'t connect to Database');
	    }

	    self::$dbConn = $conn;

    	return self::$dbConn;
    }
}