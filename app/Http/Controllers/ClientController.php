<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Http\Requests\StoreclientRequest;
use App\Http\Requests\UpdateclientRequest;
use Inertia\Inertia;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = client::paginate(3)->through(function($client){
            return[
                "id"=>$client->id,
                "nom"=>$client->nom,
                "email"=>$client->email,
                "phone"=>$client->phone,

            ];
        });

        return Inertia::render('client',[
            'clients'=>$clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return inertia('createClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclientRequest $request)
    {
        $client = new client(); // Créez une nouvelle instance du modèle
        $client->nom = $request->input('nom');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->save(); // Enregistrez l'instance dans la base de données
        
        return redirect('/clients')->with('success','Client ajouter avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        return  Inertia::render('ShowClient',[
            'client'=>$client,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        return  Inertia::render('editClient',[
            'client'=>$client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclientRequest  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclientRequest $request, client $client)
    {
       // $client = new Client(); // Créez une nouvelle instance du modèle
        $client->nom = $request->input('nom');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->save(); // Enregistrez l'instance dans la base de données
        
        return back()->with('message','Client Mise à jour avec success');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $client->delete();
        
        return back()->with('message','Client Mise à jour avec success');

    }
}
