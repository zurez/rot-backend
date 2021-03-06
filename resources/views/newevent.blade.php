@extends('layout')
@section('content')
<h4>New Event</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
			{!! Form::open(['url'=>url('/event'),'class'=>'register-form','id'=>'userform','data-parsley-validate']) !!}        
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_title" type="text" class="validate" required="true">
					<label for="user_title" class="center-align">Title</label>
				</div>
			</div>
				<div class="row margin">
				<div class="input-field col s12">
					
					<input id="max_volunteer" type="text" class="validate" required="true"
					data-parsley-type="number">
					<label for="max_volunteer" class="center-align">Max Volunteer</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="status" type="text" class="validate" required="true">
					<label for="status" class="center-align">Status</label>
				</div>
			</div>
			 <div class="row margin">
				<div class="input-field col s12">				
					<input id="type" type="text" class="validate" required="true">
					<label for="type">Type </label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="description" type="text" class="validate" required="true">
					<label for="description" class="center-align">Description</label>
				</div>
			</div>


			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="address" type="text" class="validate" required="true">
					<label for="address">Address</label>
				</div>
			</div>

			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="organiser" type="text" class="validate" required="true">
					<label for="organiser">Organiser</label>
				</div>
			</div>



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











