<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UseController extends Controller
{
    public function show(User $user, Request $request)
    {
        dd($request->header());
        return $user;
    }
}
