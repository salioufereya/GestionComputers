<?php

namespace App\Traits;

use PhpParser\Node\Expr\Cast\Array_;

trait HttpResp
{
    protected function success($code = 200,$message = '',$data=[],$links = ""):array
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'links' => $links
        ];
    }


    protected function error($code = 500, $message = null,$data=[],$links=[])
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data,
            'links'=>$links

        ]);
    }
}
