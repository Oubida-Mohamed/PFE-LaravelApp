<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserBuyerSellerController extends Controller
{
    // public function index(){
    //     $user = Auth::user();
    //     return $user;
    // }
    public function index(){
        // $services = User::with('services')->get();
        $services=User::find(2)->get();

        return response()->json($services);
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            "email"=>"required | email | unique:user_buyer_sellers",
        ]);
        if($validator->fails()){
            return response()->json(["message"=>"email deja exists","data"=>$validator, "status"=>401]);
        }
        $newUser = User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);
        auth()->login($newUser);
        $token = $newUser->createToken('token')->plainTextToken;
        // $cookie = cookie('jwt', $token, (60*24*7));
        return response()->json(["message"=>"Created with Success", "data"=>$newUser, "token"=>$token, "status"=>201]);
    }
    
    public function login(Request $request){
        if(!Auth::attempt($request->only('email' , 'password'))){
            $data = ['message'=>'Unauthorized'];
            return response()->json($data, 401);
        }
        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        // $cookie = cookie('jwt', $token, (60*24*7)); 
        return response()->json(["message"=>"Login with Success", "data"=>$user, "token"=>$token ,"status"=>201]);
    }
    
    public function loginGoogle(Request $request){
        if($user = User::where('email', $request->email)->first()) {

            $token = $user->createToken('token')->plainTextToken;
            // $cookie = cookie('jwt', $token, (60*24*7));
            return response()->json(["message"=>"Login with Success", "data"=>$user, "token"=>$token ,"status"=>201]);
        }
        $data = ['message'=>'Unauthorized'];
        return response()->json($data, 401);
    }

    

    public function logout(){
        $cookie = Cookie::forget('jwt');
        return response()->json(["message"=>"Logout with Success"], 201)->withCookie($cookie);
    }

}







