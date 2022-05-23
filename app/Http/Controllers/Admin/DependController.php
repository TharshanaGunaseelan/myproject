<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DependStoreRequest;
use App\Http\Requests\Admin\DependUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\People;
use App\Models\Depend;
use App\Models\Village;


class DependController extends Controller
{

    public function index()
    {
        $depends = Depend::orderBy('id', 'desc')->paginate(12);
        return view('admin.depend.index',compact('depends'));

    }

    public function change(Depend $depend){
        $familyhead=new People;
        $depend->familyhead=null;
        $familyhead=$depend;
        $familyhead->save();
        $depend->delete();
            return redirect()->route('depend.index')->with('success', 'Depend details has been deleted successfuly!');
    }



    

}