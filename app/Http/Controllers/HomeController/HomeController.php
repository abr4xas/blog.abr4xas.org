<?php

namespace App\Http\Controllers\HomeController;

use App\Models\Posts;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::published()->latest()->simplePaginate(4);

        return view('front.partials.home.home', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        return view('front.partials.post.post', compact('post'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sitemap()
    {
        $posts = Posts::latest()->get();

        return response()->view('front.partials.sitemap.sitemap', [
            'posts' => $posts,
        ])->header('Content-Type', 'text/xml');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function feed()
    {
        $posts = Posts::latest()->get();
        $feed = \App::make('feed');
        /* set your feed's title, description, link, pubdate and language */
        $feed->title = 'El blog de Abr4xas | Feed';
        $feed->description = 'El RSS de mi blog';
        $feed->logo = asset('/img/avatar/avatar.png');
        $feed->link = url('/feeds/all.atom.xml');
        $feed->setDateFormat('datetime');
        $feed->pubdate = $posts[0]->created_at;
        $feed->lang = 'es';
        // $feed->setShortening(true);
        // $feed->setTextLimit(100);
        // first you need to set new value (e.g. "text/xml") for your feed
        $feed->ctype = 'text/xml';

        foreach ($posts as $post) {
            $feed->add($post->title, 'angel cruz', route('posts.show', $post->slug), $post->created_at, $post->description, \Markdown::parse($post->content));
        }

        return $feed->render('atom');
    }

    /**
     * JSONFeed
     */
    public function jsonPost()
    {
        $posts = Posts::latest()->get();
        $data = [
            'version'       => 'https://jsonfeed.org/version/1',
            'title'         => 'El Blog de Abr4xas News Feed',
            'home_page_url' => env('APP_URL'),
            'feed_url'      => route('json.feed'),
            'icon'          => asset('/icons/apple-icon-72x72.png'),
            'favicon'       => asset('/favicon.png'),
            'author' => [
                'url'   => env('APP_URL'),
                'name'  => env('APP_NAME'),
            ],
            'items'         => [],
        ];

        foreach ($posts as $key => $post) {
            $data['items'][$key] = [
                'title'         => $post->title,
                'url'           => route('posts.show', $post->slug),
                'image'         => $post->image,
                'content_html'  => \Markdown::parse($post->content),
                'date_created'  => $post->created_at->tz('UTC')->toRfc3339String(),
                'date_modified' => $post->updated_at->tz('UTC')->toRfc3339String(),
                'author' => [
                    'name' => $post->user->name
                ],
            ];
        }
        return $data;
    }

    public function getCategories()
    {
        $categories = Category::get();

        $data = [
            'categories' => $categories
        ];
        return response()->json($data);
    }

}
