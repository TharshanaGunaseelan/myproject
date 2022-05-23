@extends('layouts.admin.master')
@section('title','Index')
@section('content')

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-header">
                    <div class="float-start">
                         <h2>Payment</h2>
                    </div>
                    <div class="float-end">
                    <a class="btn btn-primary btn-md btn-rounded" href="{{route('payment.create')}}"><i class="mdi mdi-account-plus mdi-18px"></i>Create Payment</a>
         </div>
                </div>
                          <div class="card-body">
                          @if (session('success'))
                        <div class="alert alert-warning">
                           {{ session('success') }}
                        </div>
                         @endif
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>First Name</th>
            <th>NIC</th>
            <th>Payment Type</th>
            <th>Status</th>
            <th>Death Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
        <tr>
        @if($payment->depends)

         <td>{{ $payment->depends->firstname}}</td>
         <td>{{ $payment->depends->nic}}</td>
         @elseif($payment->people)
          
         <td>{{$payment->people->firstname}}</td>
         <td>{{$payment->people->nic}}</td>
        @endif

       
       
        <td>{{ $payment->paymenttype}}</td>
        <td>{{ $payment->status}}</td>
        <td>{{ $payment->deathdate}}</td>
       
                           <td>
                                <a href="{{ route('payment.show',$payment->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('payment.edit',$payment->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('payment.delete',$payment->id)}}" class="btn btn-info btn-icon-split"><span class="text">Close</span></a>
                            </td>
             </tr>
</tr>
        @endforeach
    </tbody>
</table>
<div class="pt-2">
    <div class="float-right">
        {{ $payments->links() }}
    </div>
    </div>
@endsection


