<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function conversation($user_id)
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $friendsInfo = User::findOrFail($user_id);
        $myInfo = User::findOrFail(Auth::user()->id);
        return view('message.conversation', compact('users', 'friendsInfo', 'myInfo', 'user_id'));
    }
}
