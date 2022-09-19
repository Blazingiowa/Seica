<?php

namespace App\Http\Controllers\Seica;

use App\Http\Controllers\Controller;
use App\Models\CourseSubject;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Session;

class CourseSubjectController extends Controller
{
    /**
     * 科目一覧
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function CourseSubjectList(Request $request): View|Factory|Application
    {
        try {
            $subject = CourseSubject::all();
        } catch (Exception $e) {
            Session::flash('danger');
            return redirect('/course/list');
        }

        return view('coursesubject.list')->with([
            'subjects'=>$subject,
        ]);
    }

    /**
     * 科目登録
     *
     * @param Request $request
     * @return Application|Factory|Redirector|RedirectResponse|View
     */
    public function CourseSubjectRegister(Request $request): View|Factory|Redirector|RedirectResponse|Application
    {
        try {
            if ($request->getMethod() == 'POST') {
                //フォームデータ
                $data=$request->all();
                if ($request->file('subject_file')){
                    //ファイルの取得
                    $file=$request->file('subject_file');
                    //ファイルの保存
                    $file_name=$file->getClientOriginalName();
                    $file->storeAs('public/subjects',$file_name);

                    $data['subject_file']=$file_name;
                }

                //DBへの保存
                CourseSubject::create($data);
                Session::flash('success');
                return redirect('/course/list');
            }
            $users = User::all();
        }catch (Exception $e){
            Session::flash('danger');
            return redirect('/course/list');
        }

        return view("coursesubject.register")->with([
            'users' => $users
        ]);
    }

    /**
     * 科目編集
     *
     * @param $id
     * @param Request $request
     * @return Application|Factory|View|RedirectResponse|Redirector
     */
    public function CourseSubjectEdit($id,Request $request): View|Factory|Redirector|RedirectResponse|Application
    {
        try {
            $target_subject=CourseSubject::where('id',$id)->first();

            if ($request->getMethod()=="POST"){
                $target_subject->subject=$request->get('subject');
                $target_subject->manager=$request->get('manager');
                $target_subject->semester=$request->get('semester');

                //ファイル関連更新
                if ($request->file('subject_file')){
                    $file=$request->file('subject_file');

                    //古いファイルの削除
                    Storage::delete('public/subjects/'.$target_subject->subject_file);
                    //ファイルの保存
                    $file_name=$file->getClientOriginalName();
                    $file->storeAs('public/subjects',$file_name);

                    $target_subject->subject_file=$file_name;
                }

                $target_subject->save();

                Session::flash('success');
                return redirect('/course/list');
            }

        }catch (Exception $e){
            Session::flash('danger');
            return redirect('/course/list');
        }
        return view('coursesubject.edit')->with([
            'users'=>User::all(),
            'subject'=>$target_subject
        ]);
    }

    /**
     * 科目削除
     *
     * @param $id
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function CourseSubjectDelete($id,Request $request): Redirector|RedirectResponse|Application
    {
        try {
            //ファイル名
            $image_name=CourseSubject::select('subject_file')->where('id',$id)->first();

            //ファイルとDBのレコード削除
            Storage::delete('public/subjects/'.$image_name->subject_file);
            CourseSubject::destroy($id);
            Session::flash('success');

        }catch (Exception $e){
            Session::flash('danger');
        }
        return redirect('/course/list');
    }
}
