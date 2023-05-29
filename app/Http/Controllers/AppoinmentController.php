<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
        public function index()
    {
        return view('pages.appoinment');
    }
}
