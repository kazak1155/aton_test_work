<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\StatusClient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    /**
     * Display a listing of the clients.
     */
    public function showClients()
    {
        $clients = Clients::where('user_id', Auth::id())->get(); //get all clients with head auth user
        $fioHead = User::find(Auth::id())->fio;  //get fio head user
        $statuses = StatusClient::all();


        return view('users.clients',
            [
                'clients' => $clients,
                'fioHead' => $fioHead,
                'statuses' => $statuses,
            ]);
    }

    public function changeStatus() {
        $client = Clients::find(\request()->clientId);
        $client->status = request()->status;
        $client->save();
        return redirect()->route('showClients');;
    }
}
