<?php

namespace App\Helpers;

use Ixudra\Curl\Facades\Curl;
use App\Helpers\ResponseHelper;

class DatabaseHelper
{
    /**
     * DASHBOARD CONTROLLER
     */
    public static function getLecturerIndex()
    {
        $url = config('api.url').'/lecturer/index';
        $data = array('user' => ResponseHelper::user());
        $response = Curl::to($url)
        ->withData($data)
        ->post();
        
        return json_decode($response);
    }
}