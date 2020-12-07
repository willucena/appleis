<?php

namespace App\Http\Controllers;

use App\Pergunta;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $perguntas = Pergunta::all();
        return view('index', compact('perguntas'));
    }

    public function respostas(Request $request)
    {
        return view('respostas');
    }
}
