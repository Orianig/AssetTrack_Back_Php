<?php

namespace App\Http\Controllers;

//necesary facades - class

use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    //GET PROFILE

    public function profile()
    {
        try {

            $user = auth()->user();

            if (!$user) {
                return response()->json([
                    'message' => 'User not found'
                ], Response::HTTP_NOT_FOUND); // 404 state
            }

            return response()->json([
                'message' => 'User found',
                'data' => $user,
            ], Response::HTTP_OK); // 200 state

        } catch (\Throwable $th) {
            Log::error('Error retrieving user ' . $th->getMessage());
            return response()->json([
                'message' => 'Error retrieving user'
            ], Response::HTTP_INTERNAL_SERVER_ERROR); //500 state
        }
    }


    //UPDATE PROFILE




    //DELETE PROFILE
}
