<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Form;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $customer = Form::count();


        return view('pages.admin.dashboard',[
            'user' => $user,
            'customer' => $customer,
        ]);
    }
}
