<?php

namespace RedshopBase\RedObject\Sys;

use RedshopBase\AbstractCLass\Sys\DboBase;
use RedshopBase\Helper\JsonHelper;
use RedshopBase\Workflow;

class Dbo extends DboBase
{
    public $dbConfig;

    public function query($key, $param)
    {
        $param = $this->mappingParams($param);

        $res = call_user_func_array('\\Workflow\\' . $key . '::apply', [$key, $param]);

        return $res;
    }

    private function mappingParams($param)
    {
        return JsonHelper::parseSyntaxJson('user');
    }
}
