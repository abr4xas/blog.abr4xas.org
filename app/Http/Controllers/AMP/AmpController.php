<?php

namespace App\Http\Controllers\AMP;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Posts::published()->latest()->paginate(10);
        if ($request->wantsJson()) {
            return response()->json([
                'posts' => $posts
            ]);
        }

        return view('amp.partials.home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost(Posts $post)
    {
        return view('amp.partials.post.index', compact('post'));
    }

}
