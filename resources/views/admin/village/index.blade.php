@extends('layouts.admin.master')
@section('title','Index')

@section('content')

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-header">
                    <div class="float-start">
                         <h2>Villages</h2>
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
            <th>Id</th>
            <th>Village</th>
            <th>Male</th>
            <th>Female</th>
            <th>Population</th>
            <th>Family</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($villages as $village)
        <tr>
            <td>{{ $village->id}} </td>
            <td>{{$village->villagename}}</td>
            <td>{{ $village->male}}</td>
            <td>{{ $village->female}}</td>
            <td>{{ $village->family}}</td>
            <td>{{ $village->population}}</td>
            
            <td>
            <a href="{{ route('village.edit',$village->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
            </td>
             </tr>
        @endforeach
    </tbody>
</table>
<div class="pt-2">
    <div class="float-right">
        {{ $villages->links() }}
    </div>
    </div>
@endsection


