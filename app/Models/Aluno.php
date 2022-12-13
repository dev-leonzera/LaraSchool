<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [];

    protected $dates = ['data_nasc', 'data_matricula'];

    public function turma(){
        return $this->belongsTo(Turma::class, 'id_turma');
    }
}
