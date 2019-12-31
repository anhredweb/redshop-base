<?php
namespace RedshopBase\Workflow;

use RedshopBase\Helper\Database\DBHelper;

final class CreateCollection
{
    private function __construct()
    {
        // prevent new object
    }

    public static function apply($key, $param)
    {
        // 1. Check keyword is correct "CreateCollection"
        if ($key !== 'CreateCollection')
        {
            throw new \ErrorException('This keyword ' .
                $key .' is not suitable for CreateCollection workflow');
        }

        // 2. Check if collection exist or not
        // 3. If collection exist return error message
        if (DBHelper::collectionExist($param->name))
        {
            // TODO: define template for response by json and logging for audit
            return false;
        }

        // 4. If Collection not exist, create as schema define in json.
        if (!DBHelper::createCollection($key, $param))
        {
            return false;
        }

        return true;
    }
}