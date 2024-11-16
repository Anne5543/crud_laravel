<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserRedirectController extends Controller
{
    public function redirectUser()
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Verifica o tipo de usuário e redireciona
            if (auth()->user()->user_type == 0) {
                return redirect()->route('tela_admin'); // Redireciona para a área de administração
            } elseif (auth()->user()->user_type == 1) {
                return redirect()->route('dashboard'); // Redireciona para a dashboard do usuário comum
            }
        }

        // Se o usuário não estiver autenticado ou não tiver um tipo válido, redireciona para login
        return redirect()->route('login');
    }
}




