<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Auth;

class AttachmentRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\Models\Attachment";
    }
    public  function save($array)
    {
        $this->appendCurrentUserId($array);
        return $this->create($array);
    }
    public function appendCurrentUserId(&$array)
    {
        $array["user_id"] = Auth::user()->id;
    }

    public function updateAddPostId($ids, $post_id)
    {
        foreach ($ids as $id) {
            $this->update(["post_id"=>$post_id,"temp"=>false],$id);
        }
    }
}
