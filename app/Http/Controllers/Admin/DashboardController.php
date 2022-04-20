<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        
        switch(Auth::user()->role->name){
           
                case 'Admin':
                   
                return view('admin.admindashboard'); 
                    break;
                case 'Management Assistant':
                return view('admin.madashboard');   
                    break;  
                case 'Development Officer':
                    
                return view('admin.dodashboard'); 
                     break;
        }
       
    }
}
