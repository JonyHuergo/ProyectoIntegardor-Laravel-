<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;


class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canchas = Field::paginate(10);
        return view('canchas', ['canchas' => $canchas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrarCancha');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
