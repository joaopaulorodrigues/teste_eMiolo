<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Exibi os dados do usuário
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', [
            'name' => $user->name,
            'email' => $user->email,
            'modificacao' => $user->updated_at,
        ]);
    }

    /**
     * Exibi os usuários cadastrados
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cadastrados()
    {
        $users = User::all();
        return view('cadastrados', [
            'users' => $users
        ]);
    }

}
