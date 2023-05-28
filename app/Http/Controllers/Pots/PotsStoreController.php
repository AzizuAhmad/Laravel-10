<?php

namespace App\Http\Controllers\Pots;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PotsStoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): RedirectResponse
    {
    
        Post::create([
            'user_id' => Auth::id(),
            'content' => request('content')
        ]);


        // $post = new Post();

        // $post->user_id = Auth::id();
        // $post->content = request('content');

        // $post->save();

        return redirect()->back();

    }
}
