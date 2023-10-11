<?php

namespace App\Http\Controllers\Profiles;

use App\Http\Controllers\Controller;

class ShowController extends Controller {

    public function show() {
        return view('profiles.show');
    }

    public function edit() {
        return view('profiles.edit');
    }
}