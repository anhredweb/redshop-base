<?php
namespace RedshopBase\Helper\Database;

<<<<<<< HEAD
use foo\bar\Exception;
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
                throw new \ErrorException('Couldn\'t load DB config');
=======
                throw new \ErrorException('Coudn\'t found dbhelper-config.json');
>>>>>>> origin/develop
            }
        }

        return self::$dbConfig;
    }

    public function getDBConn()
    {
    	self::$dbConn = self::getConnByDBType();

    	return self::$dbConn;
    }

    private function getConnByDBType()
    {
    	if (self::$dbConfig === null)
	    {
	    	self::initConfig();
	    }

    	$config = self::$dbConfig;

    	switch ($config->dbType)
	    {
		    case 'mysql':
		    case 'mysqli':
		    default:
				$conn = \RedshopBase\Helper\Database\MysqlHelper::getConn($config);

			    if ($conn->connect_error)
			    {
				    throw new \ErrorException('Coundn\'t connect to Database');
			    }

		    	break;
	    }

	    return $conn;
    }
}