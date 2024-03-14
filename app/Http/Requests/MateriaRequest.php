<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriaRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'nome_materia' => ['required', 'string', 'max:255'],
            'area_de_estudo' => ['required', 'string', 'max:255'],
        ];
    }
}
