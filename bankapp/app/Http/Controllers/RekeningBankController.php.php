<?php

namespace App\Http\Controllers;

use App\Models\RekeningBank;
use Illuminate\View\View;

class RekeningBankController extends Controller
{
    public function index(): View
    {
        $data = RekeningBank::all();
        return view('rekening.index', compact('data'));
    }
}
