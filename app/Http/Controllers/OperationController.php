<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function addition(Request $req){
        $result = new Operation();
        $num1 = $result-> num1 = $req->num1;
        $num2 = $result-> num2 = $req->num2;

        $response = $num1 + $num2;

        return response()->json([ 
            'success' => true, 
            'statusCode' => 200,
            'operacion' => "suma",
            'response' => $response,
        ]);

    }
    public function substraction(Request $req){
        $result = new Operation();
        $num1 = $result-> num1 = $req->num1;
        $num2 = $result-> num2 = $req->num2;

        $response = $num1-$num2;

        return response()->json([ 
            'success' => true, 
            'statusCode' => 200,
            'operacion' => "resta",
            'response' => $response,
        ]);
    }
    public function split(Request $req){
        $result = new Operation();
        $num1 = $result-> num1 = $req->num1;
        $num2 = $result-> num2 = $req->num2;

        $response = $num1/$num2;

        return response()->json([ 
            'success' => true, 
            'statusCode' => 200,
            'operacion' => "division",
            'response' => $response,
        ]);
    }
    public function multiplication(Request $req){
        $result = new Operation();
        $num1 = $result-> num1 = $req->num1;
        $num2 = $result-> num2 = $req->num2;

        $response = $num1*$num2;

        return response()->json([ 
            'success' => true, 
            'statusCode' => 200,
            'operacion' => "multiplicación",
            'response' => $response,
        ]);
    }
}
