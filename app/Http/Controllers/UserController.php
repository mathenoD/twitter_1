<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user_id = Auth::id();
        $user_connected = User::with('followers', 'followings', 'posts', 'user_info')->find($user_id);

        return view('social_app/users/manage')->with('user', $user_connected);
    }

    public function get_user_ajax()
    {

        $user_id = Auth::id();
        $user = User::with('user_info')->find($user_id);
        return response()->json(['user' => $user]);
    }

    public function save_ajax(UserRequest $request)
    {

        $user_id = Auth::id();
        // Data verification + Repart data to user + user info

        $user = $request->safe()->only(['first_name', 'last_name', 'email']);
        $user_info = $request->safe()->except(['first_name', 'last_name', 'email']);

        // Save data

        User::where('id', $user_id)->update($user);
        UserInfo::where('user_id', $user_id)->update($user_info);

        // return results

        return response()->json(['message' => 'success', 'data' => User::with('user_info')->find($user_id)]);
        // $viewData = view('', compact(''))->render();
        // return response()->json($viewData);

    }
}
