<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function getUser()
    {
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/users');

        // Decode JSON into an array of objects
        $data = json_decode($response->body());

        // Pass the data to the Blade template
        return view('users', ['data' => $data]);
    }
}
