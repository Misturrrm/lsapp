<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth() ->user()->id;
        $user = User::find($user_id);
        return view('Dashboard')-> with('Catalogues', $user->catalogues);

        $admin_id= auth() ->user()->id;
        $user = Admin::find($admin_id);
        return view('Dashboard')-> with('Catalogues', $user->catalogues);




    }



}
