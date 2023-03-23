<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function destroy()
    {
        Auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
