<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Image;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.layout', [
            "page" =>"admin.home"
        ]);
    }

    public function editClients()
    {
        $clients = Client::all();
        $images = Image::all();

        return view('admin.layout', [
            "page" =>"admin.editClients",
            "clients" => $clients,
            "images" => $images,
        ]);
    }
}
