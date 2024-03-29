<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestAPIController extends Controller{
    //
    function test_data(){

        $list = [
            ['name'=>'Hello'],
            ['name'=>'Hello'],
            ['name'=>'Hello'],
            ['name'=>'Hello'],
            ['name'=>'Hello'],
        ];

        return Response::json(
            ['hello'=>$list]
        );
    }

    function whoami(){

        $user = getUser();
        $data = ['user' => $user];
        return response()->json($data, 200);
        
    }
}
