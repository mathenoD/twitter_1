<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function index()
    {

        $user = User::with('followings')->withCount('posts', 'followings', 'followers')->find(Auth::id());

        // dd($user);
        $followings = $user->toArray()['followings'][0];

        // Get posts for user connected
        $posts = Post::whereIn('user_id', $followings)->with('user', 'medias')->orderByDesc('created_at')->get();

        return view('social_app/feeds/manage', compact('posts', 'user'));
    }

    public function get_last_inserted_post()
    {
        $posts = Post::where('user_id', Auth::id())->orderByDesc('id')->limit(1)->with('user')->get();
        $viewData = view('social_app/feeds/posts', compact('posts'))->render();
        return response()->json($viewData);
    }

    public function get_latest_posts(){

        $start_date = Carbon::now();
        $end_date = Carbon::now();
        $posts = Post::where('created_at>=',$start_date)->where('created_at<',$end_date)->with('user')->get();


        /*!SECTION

        post 5 11:44

        post 4 11:41

        post 3 11:40

        My post 11:42

        post 1 11:39

        post 2 11:37
        */


    }

}
