  <div class="row">
    <div class="col-md-4">
        {!! Form::text('nic','')->placeholder('Search NIC') !!}
    </div>
    <div class="form-group col-md-1 pt-3">
        <button type='button' class="btn btn-sm btn-success mt-2 mb-2 float-right" id="search-btn">Search</button>
    </div>
 </div>


 <div class="col-md-12 d-none" id="paymenttype" >
         {!! Form::select('payementtype','Payement Type')->options([''=>'-Choose Payement TYPe-', 'P'=>'P', 'EP'=>'EP', 'DP'=>'DP','TB'=>'TB','CAN'=>'CAN','K'=>'K','SC'=>'SC']) !!}
     </div>


@section('js')
  <script>
     
        $('#search-btn').click(function () {
            var nic=$('#inp-nic').val();

if(nic) {
   $.ajax({
        type: "GET",
        url: "{{ route('get.people')}}?nic="+nic,
        success:function(res){
       if(res){
           console.log(res);
       }
    }
    });
    }
   });

  </script>
@endsection


    

