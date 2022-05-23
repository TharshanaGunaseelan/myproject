@extends('layouts.admin.master')
@section('title','Index')

@section('content')

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-header">
                    <div class="float-start">
                         <h2>Depend Details </h2>
                    </div>
                    <div class="float-end">
                    <a class="btn btn-primary btn-md btn-rounded" href=""><i class="mdi mdi-account-plus mdi-18px"></i>Create Depend</a>
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
            
            <th>Name</th>
            <th>Village ID</th>
            <th>Address</th>
            <th>Age</th>
            <th>Ethnic</th>
            <th>Religion</th>
             <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($depends as $depend)
        <tr>
        
        <td>{{ $depend->title.".".$depend->firstname." ".$depend->lastname}}</td>
        <td>{{ $depend->people->village->villagename}}</td>
        <td>{{ $depend->people->address}}</td>
        <td>{{ $depend->people->age}}</td>
        <td>{{ $depend->people->ethnic}}</td>
        <td>{{ $depend->people->religion}}</td>
        <td>
                                <a href="{{ route('depend.change',$depend->id)}}" class="btn btn-info btn-icon-split"><span class="text">Change</span></a>
                                <a href="{{ route('depend.remove',$depend->id)}}" class="btn btn-info btn-icon-split"><span class="text">Remove</span></a>
        </td>

             </tr>
        @endforeach
    </tbody>
</table>
<div class="pt-2">
    <div class="float-right">
        {{ $depends->links() }}
    </div>
    </div>
@endsection


