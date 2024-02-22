<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingatlanok;

class OffersController extends Controller
{
    public function index()
    {
        $ingatlanok = Ingatlanok::all();
        return view('offers', ['ingatlanok' => $ingatlanok]);
    }
}
