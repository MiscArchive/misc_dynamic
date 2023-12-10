<?php

namespace App\Http\Controllers;

use App\Models\Tataorder;

class WisdomController extends Controller
{
    public function tataorders()
    {
        $tataorders = Tataorder::all();

        return view('wisdom.tataorders', compact('tataorders'));
    }
}
