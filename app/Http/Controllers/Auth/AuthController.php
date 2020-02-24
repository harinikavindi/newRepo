<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;

use App\User;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {               
        //dd('hggggg');   //this debug code or echo code can be used
        //echo 'hgjagdjsg';
        //return User::create($request->all());  // to catch data in the signup form

        return 
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make ($request->get('password')),
    
            ]);


        
    }

    public function login(LoginRequests $request)
    {
        
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where(['email'=>$email])->first();

        
        if(!$user){
            return response()->json(['status'=>'error','message'=>'invalid email'],200);   
        }   
        if(!Hash::check($password,$user->password)){
            //return response()->json(['success'=>false,'message'=>'invalid password','status'=>'401']);
            return response()->json(['status'=>'error','message'=>'invalid password'],200);
        }  
        return response()->json(['success'=>true,'message'=> 'successfull', 'data' => $user],200);

        dd($user);

        
        
    }

    public function blog()
    {
      
    }
}
