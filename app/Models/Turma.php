<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = ['id_professor', 'serie', 'ano_letivo', 'nome', 'data_inicio', 'data_fim', 'turno'];

    public function professores(){
        return $this->belongsTo(Professor::class, 'id_professor');
    }

    public function alunos(){
        return $this->hasMany(Aluno::class, 'id_turma');
    }
}
