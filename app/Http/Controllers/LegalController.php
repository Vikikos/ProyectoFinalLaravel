<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function policies()
    {
        return view('legals.policies');
    }
    public function terms()
    {
        return view('legals.terms');
    }
}