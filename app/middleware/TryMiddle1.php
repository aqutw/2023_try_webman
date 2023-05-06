<?php
namespace app\middleware;

use Webman\MiddlewareInterface;
use Webman\Http\Response;
use Webman\Http\Request;

class TryMiddle1 implements MiddlewareInterface
{
    public function process(Request $request, callable $handler) : Response
    {
        $n = rand(1,4);
        file_put_contents('/tmp/0506.txt', 'test middle ' . $n);
        if ($n==4) {
          return redirect('/?n=' . $n);
        }
        $request->TryMiddle1N = $n;
        return $handler($request);
    }
}