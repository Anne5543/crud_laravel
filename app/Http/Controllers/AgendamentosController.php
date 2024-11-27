<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgendamentos;
use App\Http\Requests\StoreUpdateSupport;
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
    
    public Agendamento $agendamento;

    public function __construct()
    {
        $this->agendamento = new Agendamento();
    }

    public function index()
    {

    $servicos = Servico::all(); 
    $agendamentos = Agendamento::with('service')->get();

    return view('agendamentos_admin', compact('servicos', 'agendamentos'));
}

    

    public function create()
    {
        $servicos = Servico::all();
        return view('agendamentos.create', compact('servicos'));
    }

    public function store(StoreUpdateAgendamentos $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:40',
            'email' => 'required|email|max:50',
            'telefone' => 'required|string|max:15',
            'data' => 'required|date',
            'hora' => 'required',
            'servico' => 'required|exists:servicos,id',
            'especie' => 'required|string|max:20',
        ]);

        Agendamento::create([
            'nome' => $validatedData['nome'],
            'email' => $validatedData['email'],
            'telefone' => $validatedData['telefone'],
            'data' => $validatedData['data'],
            'hora' => $validatedData['hora'],
            'id_services' => $validatedData['servico'],
            'especie' => $validatedData['especie'],
        ]);


        return redirect()->route('dashboard')->with('success', 'Agendamento enviado com sucesso!');
    }

    public function show(Agendamento $agendamento)
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos_admin', compact('agendamentos'));
    }

    public function edit(Agendamento $agendamento)
    {
        $servicos = Servico::all();
        return view('agendamentos_edit', compact('agendamento', 'servicos'));
    }


    public function update(StoreUpdateAgendamentos $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:40',
            'email' => 'required|email|max:50',
            'telefone' => 'required|string|max:15',
            'data' => 'required|date',
            'hora' => 'required',
            'servico' => 'required|exists:servicos,id',
            'especie' => 'required|string|max:20',
        ]);

        $agendamento = Agendamento::findOrFail($id);

        $agendamento->update([
            'nome' => $validatedData['nome'],
            'email' => $validatedData['email'],
            'telefone' => $validatedData['telefone'],
            'data' => $validatedData['data'],
            'hora' => $validatedData['hora'],
            'id_services' => $validatedData['servico'],
            'especie' => $validatedData['especie'],
        ]);

        return redirect()->route('agendamentos.admin')->with('success', 'Agendamento atualizado com sucesso!');
    }




    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);

        $agendamento->delete();

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído com sucesso!');
    }
}
