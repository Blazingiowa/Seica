<?php

namespace App\Http\Controllers\Seica;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class MasterController extends Controller
{
    /**
     * フロントページ
     * @param Request $request
     * @return Application|Factory|View
     */
    public function MasterOfFront(Request $request): View|Factory|Application
    {
        return view('master.index');
    }

    /**
     * ログアウト
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
