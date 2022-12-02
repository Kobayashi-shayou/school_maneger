<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;

class StudyController extends Controller
{
    public function home()
    {
        $studies = Study::all();
		return view('user.home', compact('studies'));
	}

    public function course($id)
    {
        $study = Study::find($id);
		return view('user.course', compact('study'));
	}
}
