<?php

namespace App\Http\Controllers\Seica;

use App\Http\Controllers\Controller;
use App\Models\CourseSubject;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class CourseSubjectController extends Controller
{
    /**
     * 科目一覧
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function CourseSubjectList(Request $request)
    {
        try {
            $subject = CourseSubject::all();
            $message = true;
        } catch (\Exception $e) {
            $message = false;
            $subject = null;
        }

        return view('coursesubject.list')->with([
            'subjects'=>$subject,
            'message'=>$message
        ]);
    }

    /**
     * 科目登録
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector|void
     */
    public function CourseSubjectRegister(Request $request)
    {
        $message = null;
        $users = null;
        try {
            if ($request->getMethod() == 'POST') {
                CourseSubject::create($request->all());
                $message = true;
            }
            $users = User::all();
        }catch (\Exception $e){
            $message = false;
        }

        return view("coursesubject.register")->with([
            'message' => $message,
            'users' => $users
        ]);
    }
}
