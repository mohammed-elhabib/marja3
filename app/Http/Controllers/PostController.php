<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
class PostController extends Controller
{

    /**
     * @var PostRepository
     */
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list(Request $request)
    {

        $posts = $this->repository->paginate(10);
        if ($request->ajax()) {
            $view = view('post.list.data-post', compact('posts'))->render();
            return response()->json(['html' => $view]);
        }

        return view('post.list.list-post', compact('posts'));
    }

    /***
     * add Post View
     */
    public function add()
    {
        return view('post.add-post');
    }
    /***
     * store Post View
     */
    public function store(Request $request)
    {

        $post = $this->repository->save($request->except('_token'));
        return redirect()->route("post-view",["post_id"=> $post ->id]);
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view(Request $request,$post_id)
    {

        $post = $this->repository->find($post_id);


        return view("post.view-post",compact("post"));
    }

}
