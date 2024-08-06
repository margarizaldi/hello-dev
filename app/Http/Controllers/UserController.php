<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): Collection
    {
        return User::all();
    }

    public function create(Request $request): User
    {
        return User::create($request->all());
    }

    public function view(int $id): User
    {
        $user = User::findOrFail($id);

        return $user;
    }
}
