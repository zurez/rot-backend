@extends('layout')
@section('content')
<h4>Message</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
			{!! Form::open(['url'=>url('/message'),'class'=>'register-form','id'=>'userform','data-parsley-validate']) !!}         
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_title" type="text" class="validate" required="true" name="">
					<label for="user_title" class="center-align">Title</label>
				</div>
			</div>

			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_name" type="text" class="validate" required="true" name="">
					<label for="user_name" class="center-align">Description</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_email" type="email" class="validate" required="true" name="">
					<label for="user_email" class="center-align">Image</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_phone" type="text" class="validate" required="true" name="">
					<label for="user_phone">URL</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_phone" type="text" class="validate" required="true" name="">
					<label for="user_phone">SubTitle</label>
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









