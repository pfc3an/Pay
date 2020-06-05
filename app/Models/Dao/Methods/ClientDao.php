<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IClientDao;
use App\Models\Entities\Client;

class ClientDao implements IClientDao
{

    public function add(Client $client)
    {
        return $client->save();
    }

    public function get($id) : Client
    {
        return Client::find($id);
    }

    public function all()
    {
        return Client::all();
    }

    public function update(Client $client)
    {
        return $client->update([
            'column' => 'value'
        ]);
    }
}
