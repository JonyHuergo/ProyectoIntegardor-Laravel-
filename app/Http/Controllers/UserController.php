<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
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

    public function create()
    {
        if(Auth::check()){
            return redirect('/');
        } else{
            return view('registro');
        }
        
    }

    public function login()
    {
        return view('ingresar');
    }

    public function validateUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:4|max:45|',
            'password' => 'required'
            ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return view('bienvenido');
        }

        return view('ingresar');
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            return redirect('/');
        } else{
            
            $this->validate($request, [
                'nombre' => 'max:45|nullable',
                'apellido' => 'max:45|nullable',
                'username' => 'required|min:4|max:45|unique:users',
                'email' => 'required|email|max:80|unique:users',
                'password' => 'required',
                'avatar' => 'nullable'
                ]);
    
            $info = $request->all();
            $info['password'] = password_hash($info['password'], PASSWORD_BCRYPT);
    
            if(!isset($info['avatar'])){
                $info['avatar'] = null;
            }
    
            $usuario = User::create([
                'first_name' => $info['nombre'],
                'last_name' => $info['apellido'],
                'email' => $info['email'],
                'password' => $info['password'],
                'avatar' => $info['avatar'],
                'username' => $info['username']]
            );
    
            Auth::login($usuario);
    
            return view('paginaPrincipal');
        }

        
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
}
