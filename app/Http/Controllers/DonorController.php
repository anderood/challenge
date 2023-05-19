<?php

namespace App\Http\Controllers;

use App\Models\Donator;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donator::all();
        return view('donors.index', compact('donors'));
    }
}
