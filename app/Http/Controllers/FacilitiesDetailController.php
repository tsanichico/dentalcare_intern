<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilitiesDetailController extends Controller
{
      public function index()
    {
        return view('pages.facilities-detail');
    }
}
