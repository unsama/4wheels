<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
        // Tell laravel to retrieve the model by the $slug instead of the default $id
        public function getRouteKeyName()
        {
            return 'category';
        }

        public function show($category)
        {
            $postsForCategories = Posts::where('category', $category)->paginate(15);
            $posts = Posts::latest()->paginate(15);

            return view('categories.single-category', compact('postsForCategories', 'posts'));

            // return view('categories.single-category')->with('posts', );
        }
}
