
@extends('layout')
<h4>Add an Event</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		

			{!! Form::open(['url'=>url('/event'),'class'=>'register-form']) !!}
			

			<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_title" type="text" class="validate" name="title">
					<label for="user_title" class="center-align">Title:</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_spouse" type="number" class="validate" name="max_volunteer" value="10" >
					<label for="user_spouse" class="center-align">
					Max Volunteer:</label>
				</div>
			</div>

						<div class="row margin">
				<div class="input-field col s6">
					<select id="user_joining"
					class="validate" name="type" 
					>
						<option value="participation" selected="">
							Participation
						</option>
						<option value="view">View</option>
					</select>
					
					<label for="user_joining" class="center-align">
					Event Type</label>
				</div>

				<div class="input-field col s6">
					
					<textarea id="user_title" name="description"></textarea>
					<label for="user_title" class="center-align">DOB</label>
				</div>
			</div>
						<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_bday" type="text" onfocus="(this.type='date')" class="validate" name="sdob">
					<label for="user_bday" class="center-align">B'Day Spouse</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_wedding" type="text" onfocus="(this.type='date')" class="validate" name="wedding">
					<label for="user_wedding" class="center-align">Wedding Anniversary</label>
				</div>
			</div>
						<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_email" type="text" class="validate" name="email">
					<label for="user_email" class="center-align">E-mail Address</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_job" type="text" class="validate" name="job">
					<label for="user_job" class="center-align">Classification(Job Details)</label>
				</div>
			</div>


               			<div class="row margin">
					<div class="input-field col s6">
					
					<input id="phone" type="text" class="validate" name="phone">
					<label for="phone" class="center-align">Phone</label>
				</div>
				
			</div>



			<div class="row">
				<div class=" col s12">
					<input type="submit" class="btn waves-effect waves-light col s12 input-field" value="Save">
				</div>
				
			</div>
		</form>
	</div>
</div>



@section('script')

<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
	</script>
	@stop
  











