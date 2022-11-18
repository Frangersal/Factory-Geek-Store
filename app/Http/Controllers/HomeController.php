<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        
        //Iniciar como admin
        if(Gate::denies('admin-action')) {
            return view('admin');
        }
        if(Gate::denies('buyer-action')) {
            return view('buyer');
        }
    }

    public function maquetado()
    { 
        return view('maquetadotest'); 
    }

}
