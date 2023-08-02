<?php

namespace App\Http\Controllers;

//necesary facades - class

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class ProjectController extends Controller
{
    //GET USER PROJECT
    public function getUserProjects(Request $request)
    {
        $user = $request->user(); // Obtiene el usuario autenticado desde el token
        // Obtener los equipos a los que pertenece el usuario
        $teams = $user->teams;
        // Verifica si hay equipos y devuelve una respuesta en formato JSON
        if ($teams->isEmpty()) {
            return response()->json(['message' => 'El usuario no pertenece a ningún equipo.']);
        }

    // Eager load the projects for each team
    $teams->load('projects');

    return response()->json($teams);
}}