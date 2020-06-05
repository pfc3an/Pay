<?php


namespace App\Models\Dao\Methods;


use App\Models\Dao\Interfaces\IUser;
use App\User;

class UserDao implements IUser
{

    public function add(User $user)
    {
        return User::create([
            'column' => 'value',
        ]);
    }

    public function get($id) : User
    {
        return User::find($id);
    }

    public function all()
    {
        return User::all();
    }

    public function update(User $user)
    {
        return $user->update([
            'column' => 'value',
        ]);
    }
}
