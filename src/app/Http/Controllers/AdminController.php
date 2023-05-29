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
        $uploadedFile = $request->file('resume');
        $extension = $uploadedFile->getClientOriginalExtension();

        $allowedExtensions = ['jpg', 'png', 'jpeg', 'gif', 'svg'];

        if (!in_array($extension, $allowedExtensions)) {
            // L'estensione del file non è consentita, puoi gestire l'errore qui
            return back()->withErrors(['resume' => 'Il campo resume deve essere un file di tipo: jpg, png, jpeg, gif, svg.']);
        }

        $request->validate([
            'resume' => 'required|image:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=50,min_height=50,max_width=1000,max_height=1000',
        ]);

        if($request->file('resume')){
            $file = $request->file('resume');
            $filename = $file->getClientOriginalName();
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

    public function editClientName(Request $request, $client_id)
    {
        $new_name = $request->post('name');

        $client = Client::find($client_id);
        $client->name = $new_name;
        $client->save();

        return back()->withInput();
    }

    public function disableClient($client_id)
    {
        $client = Client::find($client_id);
        $client->enabled = false;
        $client->save();

        return back()->withInput();
    }

    public function enableClient($client_id)
    {
        $client = Client::find($client_id);
        $client->enabled = true;
        $client->save();

        return back()->withInput();
    }

    public function deleteClient($client_id)
    {
        $client = Client::find($client_id);
        $client->delete();

        return back()->withInput();
    }

    public function createClient()
    {
        $client = Client::create([
            "name" => "New Client",
        ]);

        $new_id = $client->id;

        return redirect("/admin/client/$new_id");
    }
}
