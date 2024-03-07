<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Aluno extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'notas',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user(): hasOne
    {
        return $this->hasOne(User::class, 'id');
    }
}
