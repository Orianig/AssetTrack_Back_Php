<?php

namespace App\Http\Controllers;

//necesary facades - class

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class TeamController extends Controller
{

//GET USER TEAMS
    public function getUserTeams(Request $request)
    {
        $user = $request->user(); // Obtiene el usuario autenticado desde el token
        // Obtener los equipos a los que pertenece el usuario
        $teams = $user->teams;
        // Verifica si hay equipos y devuelve una respuesta en formato JSON
        if ($teams->isEmpty()) {
            return response()->json(['message' => 'El usuario no pertenece a ningún equipo.']);
        }
    
        return response()->json($teams);
    }
}