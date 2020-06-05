<?php


namespace App\Models\Dao\Interfaces;


use App\Models\Entities\Particulier;

interface IParticulierDao
{
    public function add(Particulier $particulier);
    public function get($id);
    public function all();
    public function update(Particulier $particulier);
}
