<?php

namespace App\Http\Controllers\Seica;

use App\Http\Controllers\Controller;
use App\Models\CourseSubject;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use phpDocumentor\Reflection\Types\Null_;

class CourseSubjectController extends Controller
{
    public function CourseSubjectIndex(Request $request)
    {
        try {
            $users=User::all();
        }catch (\Exception $e){
            $users="error";
        }

        return view('coursesubject.register')->with(
            [
                'users'=>$users
            ]
        );
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector|void
     */
    public function CourseSubjectRegister(Request $request)
    {
        $message=null;
        $users=null;
        if ($request->getMethod() == 'POST') {
            try {
                CourseSubject::create($request->all());
                $users=User::all();
                $message=true;
            } catch (\Exception $e) {
                $message=false;
            }
        }

        return view("coursesubject.register")->with([
            'message'=>$message,
            'users'=>$users
        ]);
    }
}
