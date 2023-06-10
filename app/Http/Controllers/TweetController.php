<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Events\Tweetposted;
use App\Models\Post;
use App\Models\PostMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

        // Validate the request data
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        // Create a new tweet
        $tweet = new Post();
        $tweet->content = $validatedData['content'];
        $tweet->user_id = Auth::id();
        $tweet->save();
        // Process and store the media files
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $filename = $file->getClientOriginalName(); // Retrieve the original filename
                $extension = $file->getClientOriginalExtension(); // Retrieve the file extension

                $path = $file->store('media'); // Customize the storage path according to your needs

                $uniqueName = $filename;
                $counter = 1;
                while (PostMedia::where('name', $uniqueName)->exists()) {
                    $uniqueName = $filename . '-' . $counter;
                    $counter++;
                }
                // Create a new media record for the post
                $media = new PostMedia;
                $media->name = $filename;
                $media->path = $path;
                $media->extension = $extension;
                $media->post_id = $tweet->id;
                $media->save();
            }
        }}
        catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }

        event(new Tweetposted($tweet));
        return response()->json(['success' => true, 'message' => 'Tweet saved successfully']);
    }


}
