<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Auth;

class TagRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\Models\Tag";
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
}
