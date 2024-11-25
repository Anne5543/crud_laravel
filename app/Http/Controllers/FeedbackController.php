<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Models\Servico;

use Illuminate\Support\Facades\Auth;


class FeedbackController extends Controller
{
    public function feedbacksAdmin()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks_admin', compact('feedbacks'));
    }
    public function dashboard()
    {
        $servicos = Servico::all();
        $feedbacks = Feedback::all();
        if (Auth::check()) {
            $feedbacks = Auth::user()->feedbacks;
        } else {
            return redirect()->route('login');
        }
        return view('dashboard', compact('servicos', 'feedbacks'));
    }




    public function index()
    {

        $feedbacks = Feedback::all();
        return view('feedbacks_admin', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'comentario' => 'required|string|max:500',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Feedback::create($validatedData);

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
        $feedback = Feedback::findOrFail($id);
        return view('dashboard', compact('feedback'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feedback = Feedback::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'comentario' => 'required|string|max:500',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $feedback->update($validatedData);

        return redirect()->route('dashboard')->with('success', 'Feedback atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('feedbacks_admin')->with('success', 'Feedback excluído com sucesso!');
    }
}
