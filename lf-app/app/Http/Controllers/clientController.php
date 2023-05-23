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
    }

    public function consult(Request $request, $id){
        if(empty(Client::where('id', $id)->count())){
            return response()->json(['message'=>'id:'.$id.' Not found!'],400);
        }else{
            return Client::where('id', $id)->get();
        }
    }

    public function create(clientRequest $request){
        return Client::create($request->all());
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
            return response()->json(['message'=> 'Updated unrealized'],400);

        }
    }

    public function delete(Request $request, $id)
    {
        $deleted = Client::where('id', $id)->delete();

        if($deleted){
            return response()->json(['message'=>'Client id:'.$id.' deleted'],200);
        }else{
            return response()->json(['message' => 'Client id:'.$id.' not deleted'], 400);
        }
    }
}
