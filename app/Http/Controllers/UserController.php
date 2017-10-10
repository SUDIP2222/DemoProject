<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $pagination = User::paginate(10);

        return response()->json($pagination);

    }
}
