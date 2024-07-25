<?php

// app/Http/Controllers/LikeController.php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $like = Like::create([
            'user_id' => $request->user_id,
            'post_id' => $postId,
        ]);

        return response()->json($like, 201);
    }

    public function destroy($postId)
    {
        $like = Like::where('post_id', $postId)->where('user_id', auth()->id())->firstOrFail();
        $like->delete();

        return response()->json(null, 204);
    }
}
