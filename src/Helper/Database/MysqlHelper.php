<?php
namespace RedshopBase\Helper\Database;

use RedshopBase\Helper\Database\DBHelper;

class MysqlHelper
{
	public static function getConn($config)
	{
		$conn = new \mysqli(
			$config->connectionInfo->host,
			$config->connectionInfo->user,
			$config->connectionInfo->password
		);
	}
}