<?php

// UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concession;
use App\Models\Role;

class UserController extends Controller
{
    public function create()
    {
        $concessions = Concession::pluck('name', 'id');
        $roles = Role::pluck('name', 'id');

        return view('users.create', compact('concessions', 'roles'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'lastname' => 'required|max:39',
            'firstname' => 'required|max:39',
            'email' => 'required|email|unique:users',
            'phone' => 'required|max:10',
            'idConcession' => 'required|exists:concessions,id',
            'idRole' => 'required|exists:roles,id',
            'password' => 'required|min:6|confirmed',
        ]);

        // Créer un utilisateur
        $user = User::create($validatedData);

        // Rediriger ou effectuer d'autres actions après la création de l'utilisateur
        return redirect()->route('users.create')->with('success', 'Utilisateur créé avec succès.');
    }
}

