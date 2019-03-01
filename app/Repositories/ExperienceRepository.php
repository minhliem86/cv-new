<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Experience;

class ExperienceRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Experience::class;
    }
    // END

}