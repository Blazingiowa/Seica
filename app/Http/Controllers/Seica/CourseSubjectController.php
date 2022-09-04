<?php

namespace App\Http\Controllers\Seica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseSubjectController extends Controller{
    public function CourseSubjectIndex(Request $request){
        return view('coursesubject.register');
    }
}
