<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use DB;

class ManagerController extends Controller
{
    public function ManagerLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    //End AdminLogout Method

    public function ManagerDashboard(){
        return \view('manger.manager_dashboard');

    }
    //end MangerDashboard Method
}
