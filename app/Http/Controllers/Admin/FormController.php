<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Study;


class FormController extends Controller
{
    public function form()
    {
        return view('admin.form.index');
   

	}
	public function store(Request $request) {
		//dd($request);
		$study = new Study();
		$study->title = $request->input('title');
		$study->body = $request->input('body');
		$study->instructor_id = $request->input('instructor_id');
		$study->save();
	return redirect()->route('admin.top')->with('msg', '登録完了いたしました');
	}
    
    public function edit()
    {
        return view('');
    }
    
    
    public function update()
    {
        return view('');
    }

    public function delete()
    {
        return view('');
    }
}
