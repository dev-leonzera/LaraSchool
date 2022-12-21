<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Turma;
use App\Models\Aluno;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_prof = Professor::all()->count();
        $count_turmas = Turma::all()->count();
        $count_alunos = Aluno::all()->count();
        return view('home')->with('count_prof', $count_prof)->with('count_turmas', $count_turmas)->with('count_alunos', $count_alunos);
    }
}
