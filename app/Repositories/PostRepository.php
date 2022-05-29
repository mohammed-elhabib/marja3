<?php

namespace App\Repositories;

use App\Models\Tag;
use Prettus\Repository\Eloquent\BaseRepository;
use Auth;
use Illuminate\Container\Container as Application;

class PostRepository extends BaseRepository
{

    private $attachmentRepository;
    public function __construct(Application $app, AttachmentRepository $attachmentRepository)
    {
        parent::__construct($app);
        $this->attachmentRepository = $attachmentRepository;
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\Models\Post";
    }
    public  function save($array)
    {
        $this->appendCurrentUserId($array);

        $post = $this->create(["title" => $array["title"], "body" => $array["body"], "user_id" => $array["user_id"]]);
        if (key_exists("tags", $array))
          //  foreach ($array["tags"] as $id) {
                $post->tags()->attach($array["tags"]);//)[new Tag(["id" => $id])]);
          //  }

        //$repository=new AttachmentRepository( $this->app);
        if (key_exists("attachemnt", $array))
            $this->attachmentRepository->updateAddPostId($array["attachemnt"], $post->id);
        return  $post;
    }

    public function appendCurrentUserId(&$array)
    {
        $array["user_id"] = Auth::user()->id;
    }
}
