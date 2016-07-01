<?php


namespace socnetwork\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use socnetwork\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{

    public function getIndex()
    {
        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequest();

        return view('friend.index')
            ->with('friends', $friends)
            ->with('requests', $requests);
    }
}