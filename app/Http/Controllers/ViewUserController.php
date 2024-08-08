<?php

namespace App\Http\Controllers;

use App\Models\User;

class ViewUserController extends Controller
{
    public function see(User $user)
    {
        return $user;
    }
}
