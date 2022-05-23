<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ReportController extends Controller
{
    public function payment()
    {
       
        return view('admin.report.payment_report');

    }

    

    
}
