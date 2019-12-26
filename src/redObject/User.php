<?php
namespace RedshopBase\RedObject;

use AbstractClass\UserBase;
use Helper\JsonHelper;

/**
 * Class User
 * @package redSHOPBase\Object
 */
final class User extends UserBase
{
    /**
     * @var
     */
    private static $singleTonUser;

    /**
     * User constructor: Prevent using new for create object
     */
    private function __construct()
    {
    }

    /**
     * @param null $param
     * @return mixed
     */
    public function getUser($param = null){
        if (self::$singleTonUser !== null)
        {
            return self::$singleTonUser;
        }

        return self::initUserObject();
    }

    /**
     * @return \stdClass
     */
    protected function initUserObject(){
        $user = new \stdClass();

        $userConfig = JsonHelper::parseSyntaxJson('user');

        foreach($userConfig as $k => $v)
        {
            $user->$k = isset($v['default']) ? $v['default'] : null;
        }

        self::$singleTonUser = $user;

        return self::$singleTonUser;
    }
}