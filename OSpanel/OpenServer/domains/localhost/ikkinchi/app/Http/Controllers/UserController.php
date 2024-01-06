<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = null){

        return view('users.show', [
            'username' => $name
        ]);
    }

    public function list() {
        $users = [
            'Javlon',
            'Dilshod',
            'Sunnat',
            'Bekzod'
        ];
        return view('users.list', compact('users'));
    }
}

