<?php

namespace App\Modules\Web\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProfileRepository;
use App\Repositories\SkillRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ContactRepository;
use App\Repositories\EducationRepository;
use App\Repositories\ExperienceRepository;

class HomeController extends Controller
{
    protected $skill;
    protected $profile;
    protected $category;
    protected $education;
    protected $experience;
    protected $contact;

    public function __construct(ProfileRepository $profile, SkillRepository $skill, CategoryRepository $category, ContactRepository $contact, EducationRepository $education, ExperienceRepository $experience)
    {
        $this->skill = $skill;
        $this->profile = $profile;
        $this->category = $category;
        $this->contact = $contact;
        $this->education = $education;
        $this->experience = $experience;
    }

    public function index()
    {
        $profiles = $this->profile->first();
        $skills = $this->skill->all(['id','title','number']);
        $expers = $this->experience->all(['time','company_name','position', 'content']);
        $educations = $this->education->all(['time', 'title']);
        $categories = $this->category->all(['*'],['projects']);
        return view('Web::pages.index', compact(['profiles', 'skills', 'expers', 'educations', 'categories']));
    }
}
