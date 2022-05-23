@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card shadow p-3 mb-5 bg-white rounded border-info">
      <div class="card-header rounded border-primary">
        <div class="float-start">
          <h2>Payment Detail</h2>
        </div>
        <div class="float-end">
</div>
      </div>
        <br>
        <div class="float-right">
       
           
        </div>
        <br>
 <table class="table ">
                    <tr>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Payment Type</th>
                    </tr>
                    </thead>
               <tbody>
               <tr>
               <td> G</td>
              <td>Shalini</td>
             <td>Jospeh</td>
             <td>23</td>
             <td>Female</td>
             <td>DP</td>
                            
                        </tr>
                        <tr>
          <td> A</td>
         <td>Suresh</td>
        <td>Kumar</td>
        <td>60</td>
        <td>male</td>
        <td>P</td>
                       
                   </tr>
                   <tr>
          <td> S</td>
         <td>Subo</td>
        <td>David</td>
        <td>34</td>
        <td>Female</td>
        <td>TB</td>
                       
                 
                   
                </tbody>
            </table>
</div>
      </div>
      </div>
      </div>
               @endsection