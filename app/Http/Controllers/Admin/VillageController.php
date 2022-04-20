<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Village;
use App\Http\Requests\Admin\VillageUpdateRequest;

class VillageController extends Controller
{
    public function index()
    {
        $villages = Village::orderBy('id', 'asc')->paginate(12);
        return view('admin.village.index',compact('villages'));

    }

    public function edit(Village $village){
    return view('admin.village.edit',compact('village'));


    }

    public function update(Village $village,VillageUpdateRequest $request){
        $data=$request->validated();
        
        $village->update($data);
        return redirect()->route('village.index')->with('success', 'Village  details has been updated successfuly!');
        }

        public function dindex(Village $village){
            return view('admin.village.dindex',compact('village'));

        }
    
}
