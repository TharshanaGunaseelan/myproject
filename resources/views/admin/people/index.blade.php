@extends('layouts.admin.master')
@section('title','Index')

@section('content')

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-header">
                    <div class="float-start">
                         <h2>Family Head</h2>
                    </div>
                    <div class="float-end">
                    <a class="btn btn-primary btn-md btn-rounded" href="{{route('people.create')}}"><i class="mdi mdi-account-plus mdi-18px"></i>Create Family</a>
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
            <th>Village ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Ethnic</th>
            <th>Religion</th>
             <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($peoples as $people)
        <tr>
        <td>{{ $people->village->villagename}}</td>
        <td>{{ $people->title.".".$people->firstname." ".$people->lastname}}</td>
        <td>{{ $people->address}}</td>
        <td>{{ $people->age}}</td>
        <td>{{ $people->ethnic}}</td>
        <td>{{ $people->religion}}</td>
       


                            <td>
                                <a href="{{ route('people.show',$people->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('people.edit',$people->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('people.delete',$people->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                            </td>
             </tr>
        @endforeach
    </tbody>
</table>
<div class="pt-2">
    <div class="float-right">
        {{ $peoples->links() }}
    </div>
    </div>
@endsection


