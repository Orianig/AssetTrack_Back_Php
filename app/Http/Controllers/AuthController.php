<?php

namespace App\Http\Controllers;

//necesary facades - class

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

//models references
use App\Models\User;

class AuthController extends Controller
{

    //REGISTER

    public function register(Request $request)
    {
        try {

            //data validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'surname' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => ['required', Password::min(8)->mixedCase()->numbers()]
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $validData = $validator->validated();

            $lastEmployeeNumber = User::max('employee_number');
            $newEmployeeNumber = $lastEmployeeNumber + 1;
            $paddedEmployeeNumber = str_pad($newEmployeeNumber, 3, '0', STR_PAD_LEFT);


            //creation new user 
            $newUser = User::create([
                'name' => $validData['name'],
                'surname' => $validData['surname'],
                'email' => $validData['email'],
                'password' => bcrypt($validData['password']),
                'role_id' => 3,
                'employee_number' => $paddedEmployeeNumber,
            ]);

            //Token generation
            $token = $newUser->createToken('apiToken')->plainTextToken;

            return response()->json([
                'message' => 'User registered successfully',
                'data' => $newUser,
                'token' => $token
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error registering user ' . $th->getMessage());

            return response()->json([
                'message' => 'Error registering user'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
