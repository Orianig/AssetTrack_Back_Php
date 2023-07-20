<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return "it is working";
    }

    public function index1($id)
    {
        return "it is working the number " . $id;
    }
}
