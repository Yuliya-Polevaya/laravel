<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $text = 'Пользователь';
        $name = 'Юлия';

        return view('front.user', [
            'text' => $text,
            'name' => $name
        ]);
    }
}