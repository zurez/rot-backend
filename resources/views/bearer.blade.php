@extends('layout')
@section('content')
<h4>Add Bearer</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
			{!! Form::open(['url'=>url('/bearer'),'class'=>'register-form','id'=>'userform','data-parsley-validate']) !!}       
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_title" type="text" class="validate" required="true" name="title">
					<label for="user_title" class="center-align">Title</label>
				</div>
			</div>
				<div class="row margin">
				<div class="input-field col s12">
					
					<input id="organisation" type="text" class="validate" required="true" name="organisation">
					<label for="organisation" class="center-align">Organisation</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="responsibility" type="email" class="validate" required="true" name="responsibility">
					<label for="responsibility" class="center-align">Responsibility</label>
				</div>
			</div>
			 <div class="row margin">
				<div class="input-field col s12">				
					<input id="quote" type="text" class="validate" required="true" name="quote">
					<label for="quote">Quote</label>
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
					
					<input id="image_url" type="text" class="validate" required="true" name="image_url">
					<label for="image_url">Image URL</label>
				</div>
			</div>

			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="url" type="text" class="validate" required="true" name="url">
					<label for="url">URL</label>
				</div>
			</div>

			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="phone" type="text" class="validate" required="true" name="phone" data-parsley-type="number">
					<label for="phone">Phone</label>
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












