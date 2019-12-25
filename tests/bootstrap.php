<?php
/**
 * @package     Anhredweb.Redshop-Base
 * @subpackage  Tests
 *
 * @copyright  Copyright (C) 2019 Nguyễn Hoàng Anh, Inc. All rights reserved.
 * @license    MIT
 */

require_once JPATH_BASE . '/tests/unit/bootstrap.php';

if (!defined('JPATH_REDSHOP_BASE_TESTS'))
{
    define('JPATH_REDSHOP_BASE_TESTS', realpath(__DIR__));
}

require_once __DIR__ . '/../vendor/autoload.php';
require_once JPATH_PHPROBERTO_EXTENSIONS . '/libraries/redshop-base/vendor/autoload.php';