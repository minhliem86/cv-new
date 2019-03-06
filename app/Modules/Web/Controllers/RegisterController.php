<?php

namespace App\Modules\Web\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ContactRepository;
use Validator;

class RegisterController extends Controller
{
    public function register(Request $request, ContactRepository $contact)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email'
        ];

        $valid = Validator::make($request->all(), $rules);
        if($valid->fails()){
            return back()->withInput()->withErrors($valid);
        }
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'messages' => $request->input('message'),
        ];

        $contact->create($data);

        return back()->with('success');

    }
}
