@extends('layouts.admin.master')
@section('title', 'Delete')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class = "float-left">
                <h4> Are sure you want to delete this Person?</h4>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>{{$people->name}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Fullname :{{ $people->title.'.'.$people->firstname.' '.$people->lastname}}</td></tr>
                    <tr><td>Address :{{ $people->address }}</td></tr>
                    <tr><td>Occupation :{{ $people->occupation }}</td></tr>
                    <tr><td>Religion :{{ $people->religion }}</td></tr>
                    <tr><td>Nic :{{ $people->nic }}</td></tr>
                    <tr><td>Phonenumber:{{ $people->phonenumber }}</td></tr>
                </tbody>
            </table>
            <div class="card-body">
                {!! Form::open()->route('people.destroy',[$people->id])->method('delete') !!}
           
            <button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>
<a href="{{ route('people.index')}}" class="btn btn-info btn-icon-split"><span class="text">Cancel</span></a>

{!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

