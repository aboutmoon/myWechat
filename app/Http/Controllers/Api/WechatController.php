<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class WechatController extends Controller
{
    public function serve()
    {
        Log::info('request arrived.');

        $app = app('wechat.official_account');
        $app->server->push(function($msg){
            return "welcome.";
        });

        return $app->server->serve();
    }
}
