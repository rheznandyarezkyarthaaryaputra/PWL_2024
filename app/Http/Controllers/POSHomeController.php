<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSHomeController extends Controller
{
    public function home() {
        return view('POS.home');
    }
}