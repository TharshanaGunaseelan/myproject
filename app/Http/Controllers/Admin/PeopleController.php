<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PeopleStoreRequest;
use App\Http\Requests\Admin\PeopleUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\People;
use App\Models\Depend;
use App\Models\Village;


class PeopleController extends Controller
{

    public function index()
    {
        $peoples = People::orderBy('id', 'desc')->paginate(12);
        return view('admin.people.index',compact('peoples'));

    }

    public function create(){
        $villages= Village::all()->pluck('villagename', 'id')->toArray();
        $villages['']= '----Choose Your Village----';
         return view('admin.people.create',compact('villages'));

    
    }

    public function store(PeopleStoreRequest $request){
        $data = $request->validated();
        
        $P= People::create([
        'title' => $data['title'],
        'firstname' => $data['firstname'],
        'lastname' => $data['lastname'],
        'address' => $data['address'],
        'age' => $data['age'],
        'religion' => $data['religion'],
        'ethnic' => $data['ethnic'],
        'nic' => $data['nic'],
        'gender'=> $data['gender'],
        'village_id'=> $data['village_id'],
        
        ]);
        if($request->input('firstnames') != null){
            foreach($data['firstnames'] as $i=>$firstname){
                if($firstname == null){
                    continue;
                }
                Depend::create([
                
                    'title' => $data['titles'][$i],
                    'firstname' => $data['firstnames'][$i],
                    'lastname' => $data['lastnames'][$i],
                     'age' => $data['ages'][$i],
                     'nic' => $data['nics'][$i],
                     'gender'=> $data['genders'][$i],
                    'familyhead_id'=> $P->id,
                  
                    ]);
            }

        }
        return redirect()->route('people.index')->with('success', 'People has been created successfuly!');

    }

    public function edit(People $people){
        $villages= Village::all()->pluck('villagename', 'id')->toArray();
        $villages['']= '----Choose Your Village----';
        $people->load('depends');

        return view('admin.people.edit',compact('villages','people'));

    }
    
    public function show(People $people){
        return view('admin.people.show',compact('people'));
    }

    public function update(People $people,PeopleUpdateRequest $request){
        
        $data=$request->validated();
        $people->update($data);


        if($request->input('firstnames')!=null){
           
            if($people->depends()->exists() ){
                
                foreach($request->input('nics') as  $i=>$nic){
                    if($nic == null){
                        continue;
                    }  
                foreach($people->depends as $depend){
                   
                    if($depend->nic == $data['nics'][$i]){
                        Depend::update([

                            
                        'title' => $data['titles'][$i],
                        'firstname' => $data['firstnames'][$i],
                        'lastname' => $data['lastnames'][$i],
                        'age' => $data['ages'][$i],
                        'nic' => $data['nics'][$i],
                        'gender'=> $data['genders'][$i],
                        'familyhead_id'=> $people->id,
                        ]);
                    }else{
                        Depend::create([
                            
                        'title' => $data['titles'][$i],
                        'firstname' => $data['firstnames'][$i],
                        'lastname' => $data['lastnames'][$i],
                        'age' => $data['ages'][$i],
                        'nic' => $data['nics'][$i],
                        'gender'=> $data['genders'][$i],
                        'familyhead_id'=> $people->id,
                        ]);
                    }
                }}
            }else{
               
                foreach($data['firstnames'] as $i=>$firstname){
                    if($firstname == null){
                        continue;
                    }
                    Depend::create([
                    
                        'title' => $data['titles'][$i],
                        'firstname' => $data['firstnames'][$i],
                        'lastname' => $data['lastnames'][$i],
                         'age' => $data['ages'][$i],
                         'nic' => $data['nics'][$i],
                         'gender'=> $data['genders'][$i],
                        'familyhead_id'=> $people->id,
                      
                        ]);
                }
            }}
    
        return redirect()->route('people.index')->with('success', 'People  details has been updated successfuly!');
        
            
    }
        public function delete(People $people){
           return view('admin.people.delete',compact('people'));
        }
    
        public function destroy(People $people){
            $people->delete();
            return redirect()->route('people.index')->with('success', 'People details has been deleted successfuly!');
        }

    

}