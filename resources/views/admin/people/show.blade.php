@extends('layouts.admin.master')
@section('title','Show')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div >
                   
                    <a href="{{route('people.index')}}" class="float-left btn btn-primary btn-circle"><i class="fas fa-arrow-left"></i></a>
                    <h2 class="float-left ml-2">Family Details</h2>
                   
                   
                </div>
              
               
            </div>
            <div class="card-body">

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
        </div>
    </div>
</div>
</div>
@endsection
