<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AttachmentRepository;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{

    /**
     * @var AttachmentRepository
     */
    protected $repository;

    public function __construct(AttachmentRepository $repository)
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

        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->storeAs("temps", $file_name, "public");

        $attachment = $this->repository->save(["path" => $file_name, "name" => $filename, "extension" => $extension, "temp" => true]);

        return   $attachment;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function view(Request $request, $post_id)
    {

        $post = $this->repository->find($post_id);

        return view("post.view-post", compact("post"));
    }
    /***
     * add Post View
     */
    public function download($fileId)
    {
        $file = $this->repository->find($fileId);

        return Storage::download("public/temps/".$file->path);
    }
}
