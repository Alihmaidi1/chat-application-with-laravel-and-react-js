<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\user\create;
use Illuminate\Http\Request;
use App\Models\User as userModel;
use Illuminate\Support\Facades\Hash;

class user extends Controller
{


    public function create(create $request){

        try{
            $user=userModel::create([

                "name"=>$request->name,
                "lastname"=>$request->lastname,
                "email"=>$request->email,
                "password"=>Hash::make($request->password)
            ]);
            return response()->json(["message"=>"success","data"=>$user,"status"=>200]);

        }catch(\Exception $ex){

            return response()->json(['message'=>"we Have Error","status"=>"401","data"]);
        }







    }

}
