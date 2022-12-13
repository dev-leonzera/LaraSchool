<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Turma;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';

    protected $fillable = ['p_nome', 'u_nome', 'data_nasc', 'data_entrada', 'telefone', 'email', 'ativo'];

    protected $casts = [
        'ativo' => 'boolean',
    ];

    public function turmas(){
        return $this->hasMany(Turma::class);
    }
}
