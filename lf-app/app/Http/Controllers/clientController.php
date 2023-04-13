<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class clientController extends Controller
{
    protected $client;

    public function __construct()
    {
        $this->client = Client::all();

        $teste = '{
            "name": "leopoldo",
            "phone": "31975590",
            "document": "123456789"
        }';
    }

    public function consult(){
        return $this->client;
    }
    

    public function create(clientRequest $request){
        return Client::created($request->all());
    }

    public function update(clientRequest $request, $id){
        $client = Client::find($id);
        if($client){
            $client->name = $request->get('name');
            $client->phone = $request->get('phone');
            $client->document = $request->get('document');
            $client->address = $request->get('address');
            $client->update();
            return response()->json(['message'=>'Client updated with success'],200);
        }else{
            return response()->json(['message'=>'Client updated with success'],400);
           
        }
    }
}
