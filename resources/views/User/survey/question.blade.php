@extends('User.layouts.appquest')

@section('headSection')
@endsection

@section('main-content')

<h1>Input Your Questionnaire</h1>
		
<br />

<meta name="csrf-token" content="{{ csrf_token() }}">	
<div class="row">
	<div class="col-md-10">
	
		<div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
			
			<!-- panel head -->
			<div class="panel-heading">
				<div class="panel-title"><h3>{{$survey->survey_title}}</h3></div>
				
				<div class="panel-options">
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
				</div>
			</div>
			
			<!-- panel body -->
			<div class="panel-body">

				<div class="panel-body">
				
         			<form name="add_name" id="add_name" class="form-horizontal form-groups-bordered">  
			            <div class="alert alert-danger print-error-msg" style="display:none">
			            	<ul></ul>
			            </div>
			            <div class="alert alert-success print-success-msg" style="display:none">
			            	<ul></ul>
			            </div>
			            @include('Includes.messages')
			            <div class="form-group">
							<div class="col-sm-12">
			          			<input type="hidden" name="code_survey" class="form-control name_list" value="{{$survey->code_survey}}" />
								<input type="hidden" name="code_quest" class="form-control name_list" value="{{$codequest}}" />
								<textarea class="form-control autogrow input-lg" name="question" id="question" placeholder="Write Your Question Here"></textarea>
							</div>
						</div>

			            <div class="form-group">
							<label for="field-ta" class="col-sm-offset-1 col-sm-1 control-label">Options</label>
							
							<div class="col-sm-8">
								<div class="table-responsive">  
					                <table class="table table-bordered" id="dynamic_field">  
					                    <tr>  
					                        <td><input type="hidden" name="tag_id[]" placeholder="Write Your Answer" class="form-control name_list" value="1" /> <input type="text" name="answer[]" placeholder="Write Your Answer" class="form-control name_list" /></td>  
					                        <td width="10%;"><button type="button" name="add" id="add" class="btn btn-info">
					                        	<i class="glyphicon glyphicon-plus-sign"></i> Add</button>
					                        </td>  
					                    </tr>  
					                </table>  
					            </div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-10 col-sm-1">
								<a href="/survey/{{$survey->id}}/viewquestion" class="btn btn-info" title="Question">Question</a>
							</div>
							<div class="col-sm-1">
								<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
							</div>
						</div>
         			</form>  
    			</div> 
			</div>
		</div>
	</div>
</div>

@endsection

@section('footerSection')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('survey/{{$survey_id}}/question'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="answer[]" placeholder="Enter your Name" class="form-control name_list" /><input type="hidden" name="tag_id[]" placeholder="Write Your Answer" class="form-control name_list" value="1" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  

      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                dataType:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                        document.location.href="{{url('/survey')}}/"+data.id+"/viewquestion";
                    }
                }  
           });  
      });  


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>

@endsection
