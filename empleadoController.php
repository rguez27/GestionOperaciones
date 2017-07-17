<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class empleadoController extends Controller
{

    public function index(){

    }

    public function create(Request $request){
    	return view('layouts.registroEmpleado');
    }

    public function show(){
    	$empleados = Empresas::All();
        return view('layouts.verEmpresas', compact('empresas'));
    }

    public function store(Request $request){
    	if ($request->ajax()) {
            Empleado::create($request->all());
            return response()->json([
                "mensaje" => "Guardado con exito"
            ],200);
        }
    }
}