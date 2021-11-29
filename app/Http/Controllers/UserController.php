<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\API\ResponseFormatter;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::get();

        return response([
            'code' => '200',
            'status' => 'Success',
            'data' => $data
        ], 200);
    }
}
