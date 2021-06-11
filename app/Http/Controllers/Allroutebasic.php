<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Allroutebasic extends Controller
{
    public function index(){
        return view('index');
    }

    public function dashboard(){
        return view('dashboard');
    }
    
    public function investment_list(){
        return view('investment-list');
    }

    public function investment_policy_list(){
        return view('investment-policy-list');
    }

    public function manage_permissions_list(){
        return view('manage-permissions-list');
    }
}
