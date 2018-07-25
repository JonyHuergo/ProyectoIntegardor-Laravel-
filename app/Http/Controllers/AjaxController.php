<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AjaxController extends Controller
{
    public function getCantUsuarios(){
        return response()->json(User::count());
    }
}
