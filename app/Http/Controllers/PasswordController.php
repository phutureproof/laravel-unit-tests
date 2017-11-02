<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PasswordController extends Controller
{
    public function handle(Request $request, Response $response)
    {
        $whitelist = [
            '127.0.0.1'
        ];
        if (!in_array($request->ip(), $whitelist)) {
            $status = 'error';
        } else {
            $credentials = [
                'email' => $request->post('email'),
                'password' => $request->post('password')
            ];
            $status = Auth::attempt($credentials) ? 'success' : 'error';
        }
        return response()->json(['status' => $status]);
    }
}
