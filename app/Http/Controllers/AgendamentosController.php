<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Agendamento;


class AgendamentosController extends Controller
{
    public function dashboard()
    {

    $servicos = Servico::all(); 
    return view('dashboard', compact('servicos'));

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefone' => 'required|string|max:15',
        'data' => 'required|date',
        'hora' => 'required',
        'especie' => 'required|string|max:255',
        'servico' => 'required|exists:servicos,id', 
    ]);

    Agendamento::create([
        'nome' => $validatedData['nome'],
        'email' => $validatedData['email'],
        'telefone' => $validatedData['telefone'],
        'data' => $validatedData['data'],
        'hora' => $validatedData['hora'],
        'especie' => $validatedData['especie'],
        'id_services' => $validatedData['servico'],
    ]);

   
    return redirect()->back()->with('success', 'agendamento enviado com sucesso!');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
