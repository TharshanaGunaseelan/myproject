@extends('layouts.admin.master')
@section('title', 'UserList')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to delete this User?</h4>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open()->route('user.destroy',[$user->id])->method('delete') !!}
            <table class="table">
                <thead class="thead-dark">
                    
                </thead>
                <tbody>
                    <tr><td>Fullname :{{ $user->title.'.'.$user->firstname.' '.$user->lastname }}</td></tr>
                    <tr>
                    @if($user->village_id == null)
            <td>Villagename:NULL</td>
            @else
            <td>Villagename:{{ $user->village->villagename}}</td>
            @endif
<</tr>
            <tr><td>Role:{{ $user->role->name}}</td></tr>
            <tr><td>Email:{{ $user->email}}</td></tr>
                </tbody>
            </table>
            <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>
<a href="{{ route('user.index')}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>

{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

