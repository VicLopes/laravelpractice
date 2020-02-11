<?php

namespace App\Http\Controllers;

use App\Teste;
use PDF;
use Illuminate\Http\Request;

class TestesController extends Controller
{
    public function index()
    {
        $testes = Teste::all();

        return view('list', compact('testes'));
    }

    public function create()
    {
        return view('teste');
    }

    public function store()
    {
        $validatedData = request()->validate([
            'show_name' => 'required|max:255',
            'series' => 'required|max:255',
            'lead_actor' => 'required|max:255',
        ]);
        Teste::create($validatedData);
   
        return redirect('/teste')->with('success', 'Disney Plus Show is successfully saved');
    }

    public function downloadPDF($id){
        $show = Teste::find($id);
        $pdf = PDF::loadView('pdf', compact('show'));

        return $pdf->download('teste.pdf');
    }
}
