<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Abont;

class MainController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('front.main', ['cards' => $cards]);
    }

    public function about(Request $request)
    {
        if ($request->isMethod('POST')) {
            $abont = new Abont();
            $abont->name = $request->name;
            $abont->discription = $request->discription;
            $abont->save();
            return redirect('about');
        }

        return view('front.about');
    }
}