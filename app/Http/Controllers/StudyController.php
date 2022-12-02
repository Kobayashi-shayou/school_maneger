<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function home()
    {
        $studies = Study::all();
		return view('user.home', compact('studies'));
	}
}
