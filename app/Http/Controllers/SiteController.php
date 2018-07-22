<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('paginaPrincipal');
    }

    public function FAQ()
    {
        return view('preguntas');
    }
}
