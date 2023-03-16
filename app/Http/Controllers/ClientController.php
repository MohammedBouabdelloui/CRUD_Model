<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\commend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        //$client = Client::all();
        return view('welcome', ['clients' => $clients ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //$client = new Client();
        // $client->email = $request->email;
        // $client->password = $request->password;
        // $client->city = $request->city;
        // $client->save();
        // return response('ajoutée');
        $request->validate([
            'email' => 'required|email|unique:clients',
            'password' => 'required|min:5',
            'city' => 'required',
        ]);
        Client::create([
            'email'=>$request->email,
            'city'=>$request->city,
            'password'=>$request->password,
        ]);
        return redirect()->route('client.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::findorFail($id);
        return view('add' , compact('client')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
            'city' => 'required',
        ]);
        $client = Client::findorFail($id);
        $client->update([
            'email'=>$request->email,
            'city'=>$request->city,
            'password'=>$request->password,
        ]);
       
        // $client->password = $request->password;
        // $client->email = $request->email;
        // $client->city = $request->city;
        // $client->save();
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Client::destroy($id);
        $client = Client::findorFail($id)->delete();
        return redirect()->route('client.index');
    }
    public function show()
    {
        $clients = Client::onlyTrashed()->get();
        return view('archive' , compact('clients'));
    }
    public function restore($id){
        $client = Client::withTrashed()->where('id', $id)->restore();
        return redirect()->route('client.index');
    }
    public function forceDelete($id){
        Client::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('client.show',$id);
    }
    public function recherche(Request $request){
        $client = Client::dated()->get();
        return $client;
    }
    public function commonds($id){
        $commonds = Client::findorFail($id)->Commend;
        return view('commonds' , compact('commonds'));
        //return redirect()->route('client.index' , ['commonds'=>$commonds]);
    }
}
