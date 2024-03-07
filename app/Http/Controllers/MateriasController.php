<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function getMateria(Request $request)
    {
        if ($request->id){
            return Materias::find($request->id);
        }

        return Materias::all();
    }

}
