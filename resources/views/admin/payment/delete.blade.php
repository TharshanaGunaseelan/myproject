@extends('layouts.admin.master')
@section('title', 'Delete')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to close this Payment Details?</h4>
                </div>
            </div>
            
            <div class="card-body">
                {!! Form::open()->route('payment.destroy',[$payment->id])->method('delete') !!}
                @include('admin.payment._form2')
            <button class="btn btn-success btn-md float-right"><i class="mdi mdi-delete"></i> Update </button>
<a href="{{ route('payment.index')}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>

{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

