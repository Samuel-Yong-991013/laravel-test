<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewLoad()
    {
        $data = ['sam', 'john', 'bruce'];
        return view('users', ['users'=>$data]);
    }
}
