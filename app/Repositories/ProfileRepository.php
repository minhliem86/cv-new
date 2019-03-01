<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Profile;

class ProfileRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Profile::class;
    }
    // END

    public function first($columns = ['*'])
    {
        return $this->model->select($columns)->first();
    }

}