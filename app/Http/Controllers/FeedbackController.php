<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
            // Validação dos campos
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'telefone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'comentario' => 'required|string|max:500',
            ]);
    
            // Criação do feedback
            Feedback::create($validatedData);
    
            // Redirecionamento com mensagem de sucesso
            return redirect()->back()->with('success', 'Comentário enviado com sucesso!');
       
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
