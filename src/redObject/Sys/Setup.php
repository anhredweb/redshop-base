<?php
namespace RedshopBase\RedObject\Sys;

use RedshopBase\AbstractClass\Sys\SetupBase;

final class Setup extends SetupBase
{
	public static function Check($key, $param)
	{
	}

	public static function Fix($key, $param)
	{

	}

	public static function Setup($key, $param)
	{
		return self::Fix($key, $param);
	}

	private static function CheckDB()
	{
	}

	private static function CheckTable()
	{
	}

	private static function FixTable()
	{
	}
}