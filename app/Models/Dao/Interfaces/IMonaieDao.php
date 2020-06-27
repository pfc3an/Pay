<?php

 namespace App\Models\Dao\Iterfaces;

use App\Models\Entities\Monaie;

interface IMonaieDao {

    public function add(Monaie $monaie);
    public function get($id);
    public function all();
    public function update(Monaie $monaie);

} 