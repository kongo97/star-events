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

    public function editClient($client_id)
    {
        $clients = Client::find($client_id);

        return view('admin.layout', [
            "page" =>"admin.editClient",
            "client" => $clients
        ]);
    }

    public function uploadImage(Request $request, $client_id)
    {
        $request->validate([
            'resume' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);

        if($request->file('resume')){
            $file= $request->file('resume');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
        }

        Image::create([
            "url" => "/images/$filename",
            "city" => "Montecarlo",
            "client_id" => $client_id,
            "description" => "Tour Allestimento e Montaggio Vetrine di Louis Vuitton"
        ]);

        return back()->withInput();
    }

    public function deleteImage($image_id)
    {
        $image = Image::find($image_id);

        $image->delete();

        return back()->withInput();
    }
}
