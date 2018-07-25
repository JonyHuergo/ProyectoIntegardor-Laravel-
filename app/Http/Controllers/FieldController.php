<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;


class FieldController extends Controller
{

    public function index(Request $request)
    {

        if(isset($request["name"])&&!empty($request["name"])){
            $canchas = Field::where('name', '=', $request["name"])->paginate(10);
            return view('canchas', ['canchas' => $canchas]);
        }

        /*if(isset($request["sport"])&&$request["sport"] != "Todos"){

            if((isset($request["minimo"])&&is_int($request["minimo"]))||(isset($request["maximo"])&&is_int($request["maximo"]))){

                if(is_int($request["minimo"])&&!is_int($request["maximo"])){
                    $canchas = Field::where('sport', '=', $request["sport"])->where('hourly_price', '>=', $request["minimo"])->paginate(10);
                    return view('canchas', ['canchas' => $canchas]);
                }
                if(!is_int($request["minimo"])&&is_int($request["maximo"])){
                    $canchas = Field::where('sport', '=', $request["sport"])->where('hourly_price', '<=', $request["maximo"])->paginate(10);
                    return view('canchas', ['canchas' => $canchas]);
                }

                $canchas = Field::where('sport', '=', $request["sport"])->where('hourly_price', '>=', $request["minimo"])->where('hourly_price', '<=', $request["maximo"])->paginate(10);
                return view('canchas', ['canchas' => $canchas]);

            }

            $canchas = Field::where('sport', 'LIKE', $request["sport"])->paginate(10);
            return view('canchas', ['canchas' => $canchas]);
        }*/

        /*if((isset($request["minimo"])&&!empty($request["minimo"]))||(isset($request["maximo"])&&!empty($request["maximo"]))){

            if(is_int($request["minimo"])&&!is_int($request["maximo"])){
                $canchas = Field::where('hourly_price', '>=', $request["minimo"])->paginate(10);
                return view('canchas', ['canchas' => $canchas]);
            }
            if(!is_int($request["minimo"])&&is_int($request["maximo"])){
                $canchas = Field::where('hourly_price', '<=', $request["maximo"])->paginate(10);
                return view('canchas', ['canchas' => $canchas]);
            }

            $canchas = Field::where('hourly_price', '>=', $request["minimo"])->where('hourly_price', '<=', $request["maximo"])->paginate(10);
            return view('canchas', ['canchas' => $canchas]);

        }*/

        $canchas = Field::paginate(10);
        return view('canchas', ['canchas' => $canchas]);


        
    }

    public function create()
    {
        return view('registrarCancha');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'max:80|required',
            'address' => 'max:100|required',
            'sport' => 'required|max:15',
            'hourly_price' => 'required|numeric'
            ]);

        $info = $request->all();

        $usuario = Field::create([
            'name' => $info['name'],
            'address' => $info['address'],
            'sport' => $info['sport'],
            'hourly_price' => $info['hourly_price']
            ]);

        
        return redirect()->action('FieldController@index');
    }

    public function show($id)
    {
        $cancha = Field::find($id);
        return view('showCancha', ['cancha' => $cancha]);
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
