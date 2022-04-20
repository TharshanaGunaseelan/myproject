<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaymentStoreRequest;
use App\Http\Requests\Admin\PaymentUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;



class PaymentController extends Controller
{

    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->paginate(12);
        return view('admin.payment.index',compact('payments'));

    }

    public function create(){
        $q = request()->input('q');
        if($q)
        {

            $people = People::where('nic',$q)->get();
            dd($people);
        }
        
       return view('admin.payment.create');

    }

    public function dropdown(Request $request){
        dd($request);
        $people = People::where("nic",$request->nic)->get();
        return response()->json($people);

    }
    

    public function store(PaymentStoreRequest $request){
        $data = $request->validated();
        
         Payment::create([
        'payment type' => $data['payment type'],
        'status' => 'active',
       
        'familyhead_id' => $data['familyhead_id'],
        'depend_id' => $data['depend_id'],
        
        
        ]);

      
        return redirect()->route('payment.index')->with('success', 'Payment has been created successfuly!');

    }

   
    public function show(People $people){
        return view('admin.payment.show',compact('payment'));
    }

    public function update(Payment $people,PaymentUpdateRequest $request){
        $data=$request->validated();
        
      
        $people->update($data);
        return redirect()->route('payment.index')->with('success', 'Payment  details has been updated successfuly!');
        
            
    }
        public function delete(Payment $payment){
           return view('admin.payment.delete',compact('payment'));
        }
    
        public function destroy(Payment $payment){
            $payment->delete();
            return redirect()->route('payment.index')->with('success', 'Payment details has been deleted successfuly!');
        }

    

}