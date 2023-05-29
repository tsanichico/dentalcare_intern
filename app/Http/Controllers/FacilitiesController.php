<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\Service;

class FacilitiesController extends Controller
{
        public function index()
    {

        $services = Service::take(6)->get();

        $facilities = Facility::with('galleries')->take(8)->get();
        return view('pages.facilities', [
            'facilities'=> $facilities,
            'services'=> $services
        ]); 

    }
}
