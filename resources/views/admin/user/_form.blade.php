<div class="row">
     <div class="col-md-2">
         {!! Form::select('title','Title')->options([''=>'---Choose Title---', 'Mr'=>'Mr', 'Mrs'=>'Mrs', 'Miss'=>'Miss']) !!}
     </div>
     <div class="col-md-5">
         {!! Form::text('firstname', 'First Name') !!}
     </div>
     <div class="col-md-5">
         {!! Form::text('lastname', 'Last Name') !!}
     </div>
</div>
{!! Form::text('email', 'Email') !!}
{!! Form::textarea('address', 'Address') !!}
@if(Auth::user()->role->name == 'Admin')
<div class="row">
  <div class="col-md-6">
   {!! Form::select('role_id', 'Role')->options($roles) !!}
   </div>
   <div class="col-md-6 d-none" id='village'>
   {!! Form::select('village_id', 'Village')->options($villages) !!}
   </div>
</div>
@endif
<div class="row ">
    <div class="col-md-6">
        {!! Form::text('nic', 'Nic No') !!}
    </div>
    <div class="col-md-6">
        {!! Form::text('phonenumber', 'Phone No') !!}
    </div>
</div>
<div class="row ">
    <div class="col-md-6">
    {!! Form::text('password', 'Password')->type('password') !!}
    </div>
    <div class="col-md-6">
    {!! Form::text('password_confirmation', 'Confirm Password')->type('password') !!}
    </div>
</div>

@section('js')
<script>
$(document).ready(function () {

function roleChange(roleId){
    if(roleId == "3"){
        $('#village').removeClass('d-none');
        
           
    }else{
        $('#village').addClass('d-none');
       
    }
}

$('#inp-role_id').change(function () {
    var val = this.value;
     roleChange(val);
});

@if(isset($user))
    
       
        var existingRoleId = "{{ $user->role_id }}";
        roleChange(existingRoleId);
    @endif
});
</script>
@endsection