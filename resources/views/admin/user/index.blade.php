@extends('layouts.admin.master')
@section('title','UserList')

@section('content')

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-header">
                    <div class="float-start">
                         <h2>Users</h2>
                    </div>
                    <div class="float-end">
                    <a class="btn btn-primary btn-md btn-rounded" href="{{route('user.create')}}"><i class="mdi mdi-account-plus mdi-18px"></i>Create User</a>
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
            <th>Name</th>
            <th>Role</th>
            <th>Village</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id}} </td>
            <td>{{ $user->title.".".$user->firstname." ".$user->lastname}}</td>
            <td>{{ $user->role->name}}</td>
            @if($user->village_id == null)
            <td>NULL</td>
            @else
            <td>{{ $user->village->villagename}}</td>
            @endif
            <td>
                                <a href="{{ route('user.show',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Show</span></a>
                                <a href="{{ route('user.edit',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Edit</span></a>
                                <a href="{{ route('user.delete',$user->id)}}" class="btn btn-info btn-icon-split"><span class="text">Delete</span></a>
                            </td>
             </tr>
        @endforeach
    </tbody>
</table>
<div class="pt-2">
    <div class="float-right">
        {{ $users->links() }}
    </div>
    </div>
@endsection


