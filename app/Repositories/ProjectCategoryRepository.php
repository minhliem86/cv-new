<?php
namespace App\Repositories;

use App\Repositories\Contract\RestfulInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Models\ProjectCategory;

class ProjectCategoryRepository extends BaseRepository implements RestfulInterface{

    public function getModel()
    {
        return ProjectCategory::class;
    }
    // END

}