<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TagRepository;
class TagController extends Controller
{

    /**
     * @var TagRepository
     */
    protected $repository;

    public function __construct(TagRepository $repository)
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
        
       return $this->repository->all(['id','name'])->map(function($tag){
           return ["label"=>$tag->name,"value"=>$tag->id];
       });
   }

    /***
     * add Post View
     */
    public function add()
    {
    }
    /***
     * store Post View
     */
    public function store(Request $request)
    {
   }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view(Request $request,$post_id)
    {


    }

}
