<?php

 namespace App\Models\Dao\Iterfaces;

use App\Models\Entities\Pays;

interface IPaysDao {

    public function add(Pays $pays);
    public function get($id);
    public function all();
    public function update(Pays $pays);

} 