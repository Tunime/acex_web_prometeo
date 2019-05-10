<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;


class MainController extends Controller
{
    //
    public function index(Request $request)
    {
    	//return view('new-view.main');
        $cursos=Curso::all();
        //$empleados = Empleado::paginate(5);
        //dd($cursos);
        return view('new-view.main',['cursos'=>$cursos]);
    }
}
