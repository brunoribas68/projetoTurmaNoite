<?php

namespace App\Http\Controllers;

use App\Http\Requests\MateriaRequest;
use App\Models\Materia;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class MateriasController extends Controller
{
    public function listarMaterias(Request $request = null)
    {

        $materias = Materia::all();

        if ($this->existeId($request)){
            $materias = [Materia::find($request["id"])];
        }

        return view('materias', ['materias' => $materias]);
    }

    public function deletarMateria(Request $request)
    {
        if($this->existeId($request)){
            $materia = Materia::find($request["id"]);
            $materia->delete();

            return redirect(route('listarMateria'));
        }
    }

    public function formularioMateria()
    {
        return view('formularioMateria');
    }

    public function criarMateria(MateriaRequest $request)
    {

        Materia::create($request->all());

        return redirect(route('listarMaterias'));
    }

    public function formularioEditarMateria(Request $request)
    {
        if($this->existeId($request)){
            $materia = Materia::find($request['id']);
            return view('formularioMateriaEditar', ['materia' => $materia]);
        }

    }

    public function editarMateria(MateriaRequest $request)
    {
        if($this->existeId($request)){
            $materia = Materia::find($request['id']);
            $materia->nome_materia = $request['nome_materia'];
            $materia->area_de_estudo = $request['area_de_estudo'];
            $materia->save();

            return redirect(route('listarMaterias'));
        }
    }

    public function existeId($request)
    {
        return $request !== null && isset($request["id"]) && $request["id"];
    }

}
