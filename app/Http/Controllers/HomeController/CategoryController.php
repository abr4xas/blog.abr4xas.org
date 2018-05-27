<?php

namespace App\Http\Controllers\HomeController;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categoryName = $category->name;
        $posts = $category->post()
            ->latest()
            ->paginate(6);
        return view('front.partials.post-category.post-category', compact('posts', 'categoryName'));
    }
}
