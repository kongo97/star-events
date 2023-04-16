<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class SiteController extends Controller
{
    public function home()
    {
        return view('layout', [
            "page" =>"home"
        ]);
    }

    public function gallery()
    {
        $clients = Client::all();

        return view('layout', [
            "page" => "galleria",
            "clients" => $clients
        ]);
    }
}
