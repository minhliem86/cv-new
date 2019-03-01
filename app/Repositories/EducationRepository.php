<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\Education;

class EducationRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return Education::class;
    }
    // END

}