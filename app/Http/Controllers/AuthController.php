<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;  
use App\User;
use App\School;
use App\Transformers\UserTransformer;
use Auth;


class AuthController extends Controller
{
    public function register(Request $request,User $user)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
        ]);

        $user=$user->create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'api_token' => bcrypt($request->email)

        ]);

        $response = fractal()
            ->item($user)
            ->transformWith(new UserTransformer)
            ->addMeta([
                'token'=>  $user->api_token,
            ])
            ->toArray();

        return response()->json($response, 201);
    }

    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request,User $user,School $school)
    {
        if(!Auth::attempt(['email' => $request->email,'password' =>$request->password])){
            return response()->json(['error'=> 'your credential is wrong'],401);
        }

        $user = $user->find(Auth::user()->id);
        $schools = $school->all();
        return view('user/index');
    }
}
