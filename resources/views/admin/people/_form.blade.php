<div class="row" id="template">
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

<div class="row">
     <div class="col-md-4">
         {!! Form::text('age', 'Age') !!}
     </div>
     <div class="col-md-2">
         {!! Form::select('gender','Gender')->options([''=>'-Choose Gender-', 'Male'=>'Male', 'Female'=>'Female']) !!}
     </div>
      <div class="col-md-6">
         {!! Form::text('nic','NIC') !!}
     </div>
</div>
</div>
<div class="row">
     <div class="col-md-8">
         {!! Form::text('address', 'Address') !!}
     </div>
     
    <div class="col-md-4 ">
   {!! Form::select('village_id', 'Village')->options($villages) !!}
   </div>
</div>
<div class="row">
     <div class="col-md-6">
         {!! Form::select('ethnic','Ethnic')->options([''=>'---Choose Ethnic---', 'Tamil'=>'Tamil', 'Sinhalese'=>'Sinhalese', 'Muslims'=>'Muslims']) !!}
     </div>
     <div class="col-md-6">
         {!! Form::select('religion','Religion')->options([''=>'---Choose Religion---', 'Roman Catholic'=>'Roman Catholic', 'Non Roman Catholic'=>'Non Roman Catholic', 'Hindu'=>'Hindu', 'Islam'=>'Islam']) !!}
     </div>
</div>
<hr/>
  

<div  id="form-section" >
<div id="form-container" class="ml-auto mr-3" ></div>
    <button class="btn btn-sm btn-success mt-2 mb-2 float-right" id="add-btn">Add Dependence</button>
<div class="clearfix"></div>
</div>
<div id="form-template" class="d-none">
    <div class="form-row">
        <fieldset class="border p-2">
          <legend>Dependents</legend>  
    <div class="row">
     <div class="col-md-2">
         <label>Title</label>
         <select  name="titles[]" class="form-control title-input">
                <option value="">--Choose Your Title--</option>
                <option value="Miss">Miss</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
</select>  
         </div>
     <div class=" col-md-5">
            <label>First Name</label>
            <input type="text" name="firstnames[]" class="form-control firstname-input">
        </div>

        <div class=" col-md-5">
            <label>Last Name</label>
            <input type="text" name="lastnames[]" class="form-control lastname-input">
        </div>


</div>

<div class="row">
   <div class=" col-md-4">
            <label>Age</label>
            <input type="text" name="ages[]" class="form-control age-input">
        </div>

        <div class="col-md-4">
        <label>Gender</label> 
        <select  name="genders[]" class="form-control gender-input">
                <option value="">-Choose Your Gender-</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
</select>
     </div>

        <div class="col-md-4">
            <label> NIC</label>
            <input type="text" name="nics[]" class="form-control nic-input">
        </div>

</div>
        <div class="form-group col-md-1 pt-3">
            <button class="btn btn-sm btn-danger mt-2 delete-item-btn d-none"><span class="fa fa-trash"></span></button>
        </div>
</fieldset>
    </div>
</div>

@section('js')
<script>
    $(document).ready(function () {
        var template = $('#template')
        var formTemplate = $('#form-template .form-row');
        var formContainer = $('#form-container');
        var addBtn = $('#add-btn');

        function addNewItem(heading, name, amount) {
          
            var newItem = formTemplate.clone();
            formContainer.find('.delete-item-btn').addClass('d-none');
            newItem.find('.delete-item-btn').removeClass('d-none');
            if(heading){
                newItem.find('.heading-input').val(heading)
            }
            if(name){
                newItem.find('.name-input').val(name)
            }
            if(amount){
                newItem.find('.cash-input').val(amount)
            }
            formContainer.append(newItem);
        }
        addBtn.click(function (e) {
            e.preventDefault();
            addNewItem();
        });
        formContainer.on('click', '.delete-item-btn', function(e) {
            e.preventDefault();
            $(this).parent().parent().remove();
            formContainer.find('.delete-item-btn').addClass('d-none');
            formContainer.find('.delete-item-btn').last().removeClass('d-none');
           
        });
    });

</script>
@endsection
