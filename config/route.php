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

use Webman\Route;

Route::any('/test2', function ($request) {
  return response('test2');
});

// Route::any('/user/{id}', [app\controller\UserController::class, 'get']);

// 匹配 /user /user/123 和 /user/abc   (no /user/)
Route::any('/user[/{name}]', function ($request, $name = null) {
  return response('route test: ' . ($name ?? 'tom'));
});
Route::any('/user/', function ($request, $name = null) {
  return response('route test(2): ' . ($name ?? 'tom') . '#' . $request->TryMiddle1N);
})->middleware([app\middleware\TryMiddle1::class]);