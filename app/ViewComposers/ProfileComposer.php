<?php
namespace App\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ProfileRepository;

class ProfileComposer{

    protected $profile;

    public function __construct(ProfileRepository $profile)
    {
        // TODO: integrate instance
        $this->profile = $profile;
    }

    public function compose(View $view)
    {
        // TODO: Bind data to view
        $profiles = $this->profile->first();
        $view->with(['profiles' => $profiles]);
    }
}