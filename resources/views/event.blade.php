@extends('layout')
@section('content')
<h4>New Event</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
			{!! Form::open(['url'=>url('/event'),'class'=>'register-form','id'=>'userform','data-parsley-validate']) !!}        
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_title" type="text" class="validate" required="true" name="title">
					<label for="user_title" class="center-align" name='title'>Title</label>
				</div>
			</div>
				<div class="row margin">
				<div class="input-field col s12">
					
					<input id="max_volunteer" type="text" class="validate" required="true"
					data-parsley-type="number"  name='max_volunteer'>
					<label for="max_volunteer" class="center-align" >Max Volunteer</label>
				</div>
			</div>
		
					
					<input id="status" type="hidden" class="validate" required="true" name='status' value="active">
					
			
			 <div class="row margin">
				<div class="input-field col s12">		
					<select name="type" required='true' id="type" class="validate">
						<option value="participation" selected>Volunteer Event</option>
						<option value="view">Awareness Event</option>
					</select>		
			
					
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="description" type="text" class="validate" required="true" name="description">
					<label for="description" class="center-align">Description</label>
				</div>
			</div>


			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="address" type="text" class="validate" required="true" name="address">
					<label for="address">Address</label>
				</div>
			</div>

			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="organiser" type="text" class="validate" required="true" name="organiser">
					<label for="organiser">Organiser</label>
				</div>
			</div>

			<input type="hidden" name="user_id" value="1">

			<div class="row">
				<div class="input-field col s12">
					<button class="btn waves-effect waves-light right submit" type="submit" name="action">
							Save
						</button>
				</div>
				
			</div>
		</form>
	</div>
</div>
</div>
@stop


@section('script')
<script>


		// Or with jQuery
	  
		$(document).ready(function(){
		// your code here
		$('#userform').parsley().on('field:validated', function() {
		  var ok = $('.parsley-error').length === 0;
		  $('.bs-callout-info').toggleClass('hidden', !ok);
		  $('.bs-callout-warning').toggleClass('hidden', ok);
		})
		.on('form:submit', function() {
		 // return false; // Don't submit form for this demo
		});
		  })
			  
	  
		  </script>
		 
@stop











