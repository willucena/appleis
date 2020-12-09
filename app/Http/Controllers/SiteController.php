<?php

namespace App\Http\Controllers;

use App\Pergunta;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $perguntas = Pergunta::whereNull('parent_id')->get();
        $subCategorias = Pergunta::whereNotNull('parent_id')->get();
        return view('index', compact('perguntas', 'subCategorias'));
    }

    public function respostas($id)
    {
        $dados= Pergunta::where('id', $id)->get();
        return view('respostas', compact('dados'));
    }
}
