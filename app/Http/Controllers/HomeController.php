<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

use App\Models\Service;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::take(6)->get();

        $facilities = Facility::with('galleries')->take(8)->get();

        return view('pages.home',[
            'services' => $services,
            'facilities' => $facilities
        ]);
    }
}
