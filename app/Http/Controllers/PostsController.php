<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    // Tell laravel to retrieve the model by the $slug instead of the default $id
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function show($slug)
    {
        $post = Posts::where('meta_slug', $slug)->first();
        $posts = Posts::latest()->paginate(15);
        return view('blogs.single-blog', compact('post', 'posts'));
    }

    public function getAll()
    {
        return view('blogs.all')->with('posts', Posts::latest()->paginate(5));
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'excerpt' => 'required',
            'category' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_slug' => 'required',
            'author_name' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png|max:5048',
            'author_image' => 'required|mimes:jpg,jpeg,png|max:5048',
            'meta_image' => 'required|mimes:jpg,jpeg,png|max:5048',
        ]);


        // Images
        $thumbnail = $request->file('thumbnail');
        $author_image = $request->file('author_image');
        $meta_image = $request->file('meta_image');

        $thumbnail_name = time() . $thumbnail->getClientOriginalName();
        $author_image_name = time() . $author_image->getClientOriginalName();
        $meta_image_name = time() . $meta_image->getClientOriginalName();


        // Store Images
        $storedThumbnail = $thumbnail->storeAs('public/images/posts', $thumbnail_name);
        $storedAuthorImage = $author_image->storeAs('public/images/posts', $author_image_name);
        $storedMetaImageName = $meta_image->storeAs('public/images/posts', $meta_image_name);

        $title = $request->input('title');
        $description = $request->input('description');
        $excerpt = $request->input('excerpt');
        $keywords = $request->input('keywords');
        $tags = $request->input('tags');
        $category = $request->input('category');
        $meta_title = $request->input('meta_title');
        $author_name = $request->input('author_name');
        $meta_description = $request->input('meta_description');
        $meta_slug = $request->input('meta_slug');


        $post = new Posts();
        $post->title = $title;
        $post->description = $description;
        $post->excerpt = $excerpt;
        $post->keywords = $keywords;
        $post->tags = $tags;
        $post->category = $category;
        $post->meta_title = $meta_title;
        $post->author_name = $author_name;
        $post->meta_description = $meta_description;
        $post->meta_slug = $meta_slug;
        $post->thumbnail = $storedThumbnail;
        $post->author_image = $storedAuthorImage;
        $post->meta_image = $storedMetaImageName;
        $post->save();

        // return $request;
        return back()->with('status', 'post-added');
    }

    public function store2(Request $request)
    {
      return $request;
    }

    public function homepage()
    {
        return view('home')->with('posts', Posts::latest()->paginate(15));
    }
}

