<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(Request $request)
    {
        $user = User::find(1);
        $user->name = 'momo';
        $user->save();
    }
}
