@extends('layouts.admin.master')
@section('title','Create')
@section('content')

<div class="row">
     <div class="col-12">
          <div class="card">
               <div class="card-header">
                    <div class="float-left">
                         <h2>Create Family</h2>
                    </div>
             </div>
            <div class="card-body">
                @if (session('error'))
                <div class="alert alert-warning">
                           {{ session('error') }}
                        </div>
                        @endif
                        {!! Form::open()->route('people.store')->method('post') !!}
                        @include('admin.people._form')
                        <div class="row">
                              <div class="col-12">
                                   <div class="float-end">
                                   <button class="btn btn-success btn-md"><i class="mdi mdi-floppy"></i>Create</button>
                                   <a class="btn btn-dark btn-md" href="{{ route('people.index') }}"><i class="mdi mdi-cancel"></i>Cancel</a>
                                   </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
