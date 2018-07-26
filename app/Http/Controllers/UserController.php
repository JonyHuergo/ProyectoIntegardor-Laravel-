<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Field;
use Auth;
use Image;
use JsValidator;
use App\Http\Requests\UserRequest;
use App\Reservation;

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
        if(isset($request["first_name"])&&!empty($request["first_name"])){
            $usuarios = Field::where('first_name', '=', $request["first_name"])->paginate(10);
            return view('usuarios', ['usuarios' => $usuarios]);
            $usuarios = Field::paginate(10);
            return view('usuarios', ['usuarios' => $usuarios]);
        }
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

    public function store(UserRequest $request)
    {
        if(Auth::check()){
            return redirect('/');
        } else{

            $this->validate($request, [
                'nombre' => 'max:45|nullable',
                'apellido' => 'max:45|nullable',
                'username' => 'required|min:4|max:45|unique:users',
                'email' => 'required|email|max:80|unique:users',
                'cemail' => 'required|same:email',
                'password' => 'required',
                'cpassword' => 'required|same:password',
                'avatar' => 'nullable'
                ]);

            $info = $request->all();
            $info['password'] = password_hash($info['password'], PASSWORD_BCRYPT);

            if(!isset($info['avatar'])){
                $info['avatar'] = "AvatarPlaceholder.png";
            } else{
                $avatar = $info["avatar"];
                $filename = $info['username']."-".time().".".$avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(200, 200)->save(public_path("/imagenes/avatars/".$filename));
                $info["avatar"] = $filename;
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

            return redirect('/');
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
        $usuario = Field::find($id);
        return view('perfil', ['usuario' => $usuario]);

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
        $usuario = Field::find($id);
        return view('editarUsuario', ['usuario' => $usuario]);



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
        $this->validate($request, [
            'first_name' => 'max:80|required',
            'last_name' => 'max:100|required',
            'username' => 'max:100|required'
            ]);

        $usuario = Field::find($id);

        $usuario->first_name = $request["first_name"];
        $usuario->last_name = $request["last_name"];
        $usuario->username = $request["username"];
        $usuario->save();

        return view('perfil', ['usuario'=>Auth::user()]);
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

    public function perfil()
    {
        if(!Auth::check()){
            return redirect('/');
        } else{
            $usuario=Auth::user();
            $reservas = Reservation::where('user_id', '=', $usuario->id)->get();
            return view('perfil', compact('usuario','reservas'));
        }
    }
}
