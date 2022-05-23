<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->orderBy('id', 'desc')->paginate(12);
        return view('admin.user.index',compact('users'));

    }

    public function create(){
        $roles = Role::all()->pluck('name', 'id')->toArray();
        $roles['']='----Choose Your Role----';
        $villages= Village::all()->pluck('villagename', 'id')->toArray();
        $villages['']= '----Choose Your Village----';
        return view('admin.user.create',compact('roles','villages'));

    }
    
    public function store(UserStoreRequest $request){
        $data = $request->validated();
        if($data['role_id'] == 3){
            $village_id = $data['village_id'];
        }else{
            $village_id = NULL;
        }

        User::create([
            'title' => $data['title'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'village_id' => $village_id,
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'nic' => $data['nic'],
            'phonenumber' => $data['phonenumber'],
            'address' => $data['address'],
            'password' =>Hash::make($data['password']),
        ]);

        return redirect()->route('user.index')->with('success', 'User has been created successfuly!');
    
        
    }

    public function show(User $user){
        return view('admin.user.show',compact('user'));
    }

    public function edit(User $user){
        $roles = Role::all()->pluck('name', 'id')->toArray();
        $roles['']='----Choose Your Role----';
        $villages= Village::all()->pluck('villagename', 'id')->toArray();
        $villages['']= '----Choose Your Village----';
        return view('admin.user.edit',compact('roles','villages','user'));


    }

    public function update(User $user,UserUpdateRequest $request){
        $data=$request->validated();
        
        if($request->input('password')){
            $data['password'] = Hash::make($request->input('password'));
        }else{$data['password'] = $user->password;}

        if(Auth::user()->role->name =='Admin'){
            if($data['role_id']!= 3){
                  $data['village_id']= NULL;
            }
            
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User  details has been updated successfuly!');
        }else{
            $data['village'] = $user->village;
            $data['email'] = $user->email;
            $data['role_id'] = $user->role_id;

            $user->update($data);
            return redirect()->route('dashboard')->with('success', 'Your Profile Updated!');


            
        }
    }
        public function delete(User $user){
            $user->load('village','role');
            return view('admin.user.delete',compact('user'));
        }
    
        public function destroy(User $user){
            $user->delete();
            return redirect()->route('user.index')->with('success', 'User details has been deleted successfuly!');
        }

    
}
