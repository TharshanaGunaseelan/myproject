  <div class="row">
    <div class="col-md-4">
        {!! Form::text('nic','')->placeholder('Search NIC') !!}
    </div>
    <div class="form-group col-md-1 pt-3">
        <button type ='submit' class="btn btn-sm btn-success mt-2 mb-2 float-right" id="search-btn">Search</button>
    </div>
 </div>

 <div class="row" id="template">
<div class="row">
     <div class="col-md-2 d-none table-data " >
         {!! Form::select('title','Title')->options([''=>'---Choose Title---', 'Mr'=>'Mr', 'Mrs'=>'Mrs', 'Miss'=>'Miss']) !!}
     </div>
     <div class="col-md-5 d-none table-data" >
         {!! Form::text('firstname', 'First Name') !!}
     </div>
     <div class="col-md-5 d-none table-data" >
         {!! Form::text('lastname', 'Last Name') !!}
     </div>

</div>

<div class="row">
     <div class="col-md-4 d-none table-data">
         {!! Form::text('age', 'Age') !!}
     </div>
     <div class="col-md-8 d-none table-data" >
         {!! Form::select('gender','Gender')->options([''=>'-Choose Gender-', 'Male'=>'Male', 'Female'=>'Female']) !!}
     </div>
</div>

<div class="col-md-12 d-none table-data" >
         {!! Form::text('address', 'Address') !!}
</div> 

 

 <div class="col-md-12 d-none table-data" id="paymenttype" >
         {!! Form::select('paymenttype','Payment Type')->options([''=>'-Choose Payment TYPe-', 'P'=>'P', 'EP'=>'EP', 'DP'=>'DP','TB'=>'TB','CAN'=>'CAN','K'=>'K','SC'=>'SC']) !!}
     </div>

     <div class="col-md-12 d-none table-data" >
         {!! Form::textarea('description', 'description') !!}
</div>


@section('js')
  <script>
     
        $('#search-btn').click(function (e) {
e.preventDefault();

            var nic=$('#inp-nic').val();
            
if(nic) {
   $.ajax({
        type: "GET",
        url: "{{ route('get.person')}}?nic="+nic,
        success:function(res){
       if(res){
        $.each(res,function(key,value){

        $("#inp-title").val(value.title);
        $("#inp-firstname").val(value.firstname);
        $("#inp-lastname").val(value.lastname);
        $("#inp-age").val(value.age);
        $("#inp-gender").val(value.gender);
        $("#inp-address").val(value.address);
       })
       }

    },
    complete:function(){
        $(".table-data").removeClass('d-none');
    }
    });
    }
   });

  </script>
@endsection


    

