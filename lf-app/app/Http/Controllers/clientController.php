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

    public function consult(){
        return $this->client;
    }

    public function create(Request $request){
        dd('die');
        //return Client::created($request->all());
    }
}
