@extends('layouts.admin.master')
@section('title', 'Delete')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to delete this Payment Details?</h4>
                </div>
            </div>
            <table class="table">
               
                <tbody>
                     
                    <tr><td>Payment Type:{{ $payment->payment type }}</td></tr>
                    <tr><td>Status :{{ $payment->status }}</td></tr>
                    <tr><td>Death Date :{{ $payment->deathdate }}</td></tr>
                   
                </tbody>
            </table>
            <div class="card-body">
                {!! Form::open()->route('payment.destroy',[$payment->id])->method('delete') !!}
           
            <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>
<a href="{{ route('payment.index')}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>

{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

