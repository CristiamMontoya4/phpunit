<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function upload(Request $request) 
    {
        $request->validate([
            'photo' => 'required'
        ]);
        $request->file('photo')->store('profiles');
        return redirect('profile');
    }
}
