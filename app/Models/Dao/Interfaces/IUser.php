<?php


namespace App\Models\Dao\Interfaces;


use App\User;

interface IUser
{
    public function add(User $user);
    public function get($id);
    public function all();
    public function update(User $user);
}
