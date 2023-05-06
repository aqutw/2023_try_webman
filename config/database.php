<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

return [
  'mysql' => [
    'driver'      => 'mysql',
    'host'        => '127.0.0.1',
    'port'        => 3306,
    'database'    => 'webman',
    'username'    => 'root',
    'password'    => file_get_contents('/tmp/mysqlpwd.txt'),
    'unix_socket' => '',
    'charset'     => 'utf8',
    'collation'   => 'utf8_unicode_ci',
    'prefix'      => '',
    'strict'      => true,
    'engine'      => null,
  ],
];
