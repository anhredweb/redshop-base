<?php

namespace RedshopBase\RedObject\Sys;

use RedshopBase\AbstractCLass\Sys\DboBase;
use RedshopBase\Workflow;

class Dbo extends DboBase
{
	public $dbConfig;

	public function get($key, $param){
	}

	public function set($key, $param){
	}

	private function getItem(){
	}

	private function setItem(){
	}

	private function getCollection($key, $param)
	{
	}

	private function setCollection($key, $param)
	{
	    $res = Workflow\CreateCollection::apply($key, $param);

	    return $res;
	}
}
