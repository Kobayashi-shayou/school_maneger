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

    public function apply($id)
    {
        $study = Study::find($id);
		return view('user.apply', compact('study'));
	}

    public function confirm(Request $request)
    {
        $price = 5000;
        $coupon = $request->coupon;
        if ($coupon == 777)
        {
            //勉強会の価格、一律5000円からクーポン番号に対応した価格を値引く
            // 777 -> １０００円分
            $price = 5000 - 1000;
        } 
        $id = $request->study_id;
        $study = Study::find($id);
		return view('user.confirm', compact('study', 'price'));
	}
}
