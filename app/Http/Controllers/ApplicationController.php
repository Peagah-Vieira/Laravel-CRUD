<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function dashboardShow(Request $request)
    {
        return view('dashboard.home', [
            'user' => $request->user(),
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function userShow(Request $request)
    {
        $data = [
            'user' => $request->user(),
            'users' => User::select('*')->paginate(10),
        ];

        return view('dashboard.users', $data);
    }
}
