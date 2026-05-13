<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class MainController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        $text = "Главная страница";

        return view('front.main', ['cards' => $cards, 'text' => $text]);
    }
}
