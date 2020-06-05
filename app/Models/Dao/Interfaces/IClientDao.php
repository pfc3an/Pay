<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Client;

interface IClientDao
{
    public function add(Client $client);
    public function get($id);
    public function all();
    public function update(Client $client);
}
