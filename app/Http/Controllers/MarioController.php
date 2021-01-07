<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Chara;
use App\Models\Course;

class MarioController extends Controller
{
    function top() {
        // view ファイルを返却
        return view('top');
    }

    function douga() {
        // view ファイルを返却
        return view('douga');
    }

    function menseki() {
        // view ファイルを返却
        return view('menseki');
    }

    function course_list() {
        // view ファイルを返却
        return view('course_list');
    }

    function kaihouCourse() {
        // view ファイルを返却
        return view('kaihouCourse');
    }

    function custom() {
        // view ファイルを返却
        return view('custom');
    }

    function chara() {

        $chara = DB::table('charas')->get();
    
        // dd($user);

        // view ファイルを返却
        return view('chara', compact('chara'));
    }

    function chara_result(request $request) {

        $postChara_id = $request->chara_id;
        $chara = DB::table('charas')->get();
        $specialCourse = DB::table('special_courses')->get();
        // $course = DB::table('courses')
        // ->select('course_id')
        // ->leftJoin('special_courses','course_id','=','course_id')
        // ->whereIn("special_courses.chara_id",$postChara_id)
        // ->get();
        
        $size_info = Course::where('course_list', 1)->first();
        
    
       dd($size_info);
        
        
        
        // view ファイルを返却
        return view('chara_result', compact('chara', 'course','postChara_id','size_info'));
    }
}
