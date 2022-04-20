@extends('layouts.admin.master')
@section('title','Show')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
                   
                    <a href="{{route('payment.index')}}" class="float-left btn btn-primary btn-circle"><i class="fas fa-arrow-left"></i></a>
                    <h2 class="float-left ml-2">Payment Details</h2>
                   
                   
                </div>
              
               
            </div>
            <div class="card-body">

            <table class="table">
                
                <tbody>
                    
                    <tr><td>Payment Type:{{ $payment->payment type }}</td></tr>
                    <tr><td>Status :{{ $payment->status }}</td></tr>
                    <tr><td>Death Date :{{ $payment->deathdate }}</td></tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
