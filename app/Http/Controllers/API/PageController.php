<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        // Recupera tutti i post
        $posts = Post::all();

        // Ritorna i dati in formato JSON
        return response()->json($posts);
    }
}
