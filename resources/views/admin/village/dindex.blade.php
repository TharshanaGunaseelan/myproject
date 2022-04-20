@extends('layouts.admin.master')
@section('title','Index')

@section('content')

<table class="table">
<thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Village Name</th>
            <th>Male</th>
            <th>Female</th>
            <th>Family</th>
            <th>Population</th>
            <th>Action</th>
        </tr>
    </thead>

   <tbody>
   <tr>
            <td>{{ $village->id}} </td>
            <td>{{$village->villagename}}</td>
            <td>{{ $village->male}}</td>
            <td>{{ $village->female}}</td>
            <td>{{ $village->family}}</td>
            <td>{{ $village->population}}</td>

            <td>
            <a href="{{ route('do.village.index',$village->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
            </td>
  </tr>
</tbody>
</table>
@endsection