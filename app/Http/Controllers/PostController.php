<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display the index blog page.
     *
     * @return View The posts/index.blade.php view
     */
    public function index(): View
    {
        return view('posts.index');
    }
}
