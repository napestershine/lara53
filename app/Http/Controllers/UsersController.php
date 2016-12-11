<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'Manoj',
                'last_name' => 'Kumar',
                'location' => 'Jaipur'
            ],
            '1' => [
                'first_name' => 'Kri',
                'last_name' => 'Shine',
                'location' => 'Delhi'
            ]
        ];
        return view('admin.users.index', compact('users'));
    }
}
