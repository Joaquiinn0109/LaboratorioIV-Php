<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class GetAllUsersController extends Controller
{
    public function GetAllUsers()
    {
        $users = User::all();
        return view('admin.get-all-user', ['users' => $users]);
    }
}
