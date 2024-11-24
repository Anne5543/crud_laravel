<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Agendamento;
use App\Http\Requests\StoreUpdateSupport;


class AgendamentosController extends Controller
{

    public function dashboard()
    {
        $servicos = Servico::all();
        return view('dashboard', compact('servicos'));
    }
    public readonly Agendamento $agendamento;

    public function __construct()
    {
        $this->agendamento = new Agendamento();
    }

    public function index()
    {
        $agendamentos = Agendamento::with('service')->get();
        $agendamentos = Agendamento::all();

        return view('agendamentos_admin', compact('agendamentos'));
    }

    public function create()
    {
        $servicos = Servico::all();
        return view('agendamentos.create', compact('servicos'));
    }

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

    public function show(Agendamento $agendamento)
    {
        $agendamentos = Agendamento::all();
        return view('agendamentos_admin', compact('agendamentos'));
    }

    public function edit(Agendamento $agendamento)
    {
        $agendamentos = Agendamento::all();
        $servicos = Servico::all();
    
        return view('agendamentos_edit', compact('agendamento', 'servicos'));
    }

    public function update(StoreUpdateSupport $request, string $id)
    {
        $updated = $this->agendamento->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Agendamento atualizado com sucesso!');
        }

        return redirect()->back()->with('message', 'Erro ao atualizar agendamento.');
    }

    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);

        $agendamento->delete();

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído com sucesso!');
    }
}
