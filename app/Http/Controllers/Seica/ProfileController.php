<?php

namespace App\Http\Controllers\Seica;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * アカウント情報
     *
     * @return Application|Factory|View
     */
    public function AccountMaster(Request $request){
        return view('mypage.profile');
    }
}
