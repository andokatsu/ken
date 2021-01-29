<?php

namespace App\Http\Controllers;

use App\Models\Chara;
use App\Models\Course;
use App\Models\Special_course;
use Illuminate\Http\Request;


class CharaController extends Controller
{
    public function chara2(Request $request)
    {

        $chara = Chara::all();
        return view('chara2', compact('chara'));
    }

    public function chara_result2(Request $request)
    {
        $course = Course::all();

        //chara.bladeで選択されたchara_idを取得
        $postChara_id = $request->chara_id;
        $selectCount = count($postChara_id);

        $special = Special_course::where('chara_id', $postChara_id)->get('course_id');
        dd($selectCount);
        
        

        // return view('chara_result2', ['course' => $course],['postChara_id' => $postChara_id]);
        return view('chara_result2',compact('course', 'postChara_id', 'special'));
    }
    
}
