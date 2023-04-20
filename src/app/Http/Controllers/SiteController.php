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

    public function clientGallery($id)
    {
        $client = Client::where('id', $id)->first();
        $images = $client->images;

        return view('layout', [
            "page" => "galleriaCliente",
            "images" => $images,
            "client" => $client
        ]);
    }
}
