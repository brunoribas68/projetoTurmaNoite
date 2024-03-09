<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function listarAlunos(Request $request)
    {
        $alunos = [];
        foreach (Aluno::all() as $aluno){
            $relacaoAlunoUsuario = $aluno->user()->first();

            $alunos[] = [
                "id" => $aluno->id,
                "notas" => $aluno->notas,
                "name" => $relacaoAlunoUsuario->name,
                "telefone"=>  $relacaoAlunoUsuario->telefone,
                "email"=>  $relacaoAlunoUsuario->email,
                "user_id"=>  $relacaoAlunoUsuario->id

            ];
        }

        return $alunos;

    }
}
