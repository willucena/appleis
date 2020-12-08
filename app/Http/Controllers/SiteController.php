<?php

namespace App\Http\Controllers;

use App\Pergunta;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $perguntas = Pergunta::whereNull('parent_id')->get();
        return view('index', compact('perguntas'));
    }

    public function respostas($id)
    {
        $dados= Pergunta::where('parent_id', $id)->get();
        return view('respostas', compact('dados'));
    }
}
