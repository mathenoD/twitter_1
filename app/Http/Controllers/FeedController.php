<?php

namespace App\Http\Controllers;

class FeedController extends Controller
{
    public function index()
    {

        return view('users/feed/manage');
    }
}
