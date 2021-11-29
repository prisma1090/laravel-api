<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ServiceDetails;
use App\Model\ServiceHeaders;

class ServiceController extends Controller
{
    public function service_headers()
    {
        $data = ServiceHeaders::select('id','service_name')->get();
        $datas = ServiceHeaders::select('id','service_name')->get();

        foreach($datas as $date)
        {
            $service_json = ServiceDetails::where(['service_id' => $date->id])->get();
        }

        return response([
            'code' => '200',
            'status' => 'Success',
            'data' => $data,
            'service_json' => ([
                'service_id' => $datas,
                'json' => $service_json
            ])
        ], 200);
    }
}
