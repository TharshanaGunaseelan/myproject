<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentStoreRequest;
use App\Http\Requests\Admin\PaymentUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;
use App\Models\People;
use App\Models\Depend;



class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->paginate(12);
        return view('admin.payment.index',compact('payments'));

    }

    public function create(){
        
         return view('admin.payment.create');

    }

    public function dropdown(Request $request){
       
        $people = People::where("nic",$request->nic)->get();
        
        return response()->json($people);

    }
    

    public function store(PaymentStoreRequest $request){
        $data = $request->validated();
       

        if(People::where('nic',$data['nic'])->exists()){
        $data['familyhead_id']=People::where('nic',$data['nic'])->value('id');
        }else{
            $data['familyhead_id']=null;
        }

        
        if(Depend::where('nic',$data['nic'])->exists()){
            $data['depend_id']=Depend::where('nic',$data['nic'])->value('id');
            }else{
                $data['depend_id']=null;
            }

         Payment::create([
        'paymenttype' => $data['paymenttype'],
        'status' => 'active',
        'description' => $data['description'],
       
        'familyhead_id' => $data['familyhead_id'],
        'depend_id' => $data['depend_id'],
        
        
        ]);

      
        return redirect()->route('payment.index')->with('success', 'Payment has been created successfuly!');

    }

   
    public function show(Payment $payment){
        return view('admin.payment.show',compact('payment'));
    }

    public function edit(Payment $payment){
        return view('admin.payment.edit',compact('payment'));
    }

    public function update(Payment $people,PaymentUpdateRequest $request){
        $data=$request->validated();
        
      
        $people->update($data);
        return redirect()->route('payment.index')->with('success', 'Payment  details has been updated successfuly!');
        
            
    }
        public function delete(Payment $payment){
           return view('admin.payment.delete',compact('payment'));
        }
    
        public function destroy(Payment $payment,Request $request){
            $request->validate([
                'deathdate' => 'required',
                
            ]);
            $payment->update(['deathdate'=>$request->deathdate,'status'=>'inactive']);
            return redirect()->route('payment.index')->with('success', 'Payment details has been updated successfuly!');
        }

    

}