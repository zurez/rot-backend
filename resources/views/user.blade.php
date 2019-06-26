
@extends('layout')
@section('css')
<style>
.btn-submit{background:#26a69a; width:100%;border-radius:4px;border:0px;padding:10px;color:#fff;font-weight:600;    cursor: pointer;}
.btn-submit:hover{background:#2bbbad;}
.btn-submit:active{background:#75f1e5;}
</style>
@stop
@section('content')
<h4>Sign Up</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		
		
			{!! Form::open(['url'=>url('/'),'class'=>'register-form','id'=>'userform','data-parsley-validate']) !!}
			
			<input type="hidden" name="password" value="lol">
			<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_title" type="text" class="validate" name="name" required="true" >
					<label for="user_title" class="center-align">Member Name:</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_spouse" type="text" class="validate" name="spouse" required="true">
					<label for="user_spouse" class="center-align">Spouse Name:</label>
				</div>
			</div>

						<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_joining" type="text" onfocus="(this.type='date')" class="validate" name="joining" required="true">
					<label for="user_joining" class="center-align">Year of Joining Rotary</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_title" type="text" onfocus="(this.type='date')" class="validate" name="dob" required="true">
					<label for="user_title" class="center-align">DOB</label>
				</div>
			</div>
						<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_bday" type="text" onfocus="(this.type='date')" class="validate" name="sdob" required="true">
					<label for="user_bday" class="center-align">B'Day Spouse</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_wedding" type="text" onfocus="(this.type='date')" class="validate" name="wedding" required="true">
					<label for="user_wedding" class="center-align">Wedding Anniversary</label>
				</div>
			</div>
						<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_email" type="text" class="validate" name="email" required="true" data-parsley-type="email">
					<label for="user_email" class="center-align">E-mail Address</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_job" type="text" class="validate" name="job" required="true">
					<label for="user_job" class="center-align">Classification(Job Details)</label>
				</div>
			</div>


               			<div class="row margin">
					<div class="input-field col s6">
					
					<input id="phone" type="text" class="validate" name="phone" required="true" data-parsley-type='number' data-parsley-length="[10, 10]"
					data-parsley-maxlength=10>
					<label for="phone" class="center-align">Phone</label>
				</div>
				
			</div>



			<div class="row">
				<div class=" col s12">
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
    //return false; // Don't submit form for this demo
  });
	})
		

	</script>
	@stop
  











