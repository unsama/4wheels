<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class XMLSitemapController extends Controller
{
    public function index() {
        $posts = Posts::all();
        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
      }
}
