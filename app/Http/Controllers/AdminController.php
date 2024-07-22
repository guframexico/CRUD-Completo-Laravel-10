<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $usuarios = User::all();
        //return view('admin.index', compact('usuarios')); es lo mismo que la linea de abajo
        return view('admin.index', ['usuarios' => $usuarios]);
    }
}
