<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Repositories\PostRepository;
class HomeController extends Controller
{



    public function __construct(PostRepository $repository){
        $this->middleware('auth');

        $this->repository = $repository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {




    	return view('home');
    }
}
