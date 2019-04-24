

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>.form-container{width:31%!Important;margin:auto;} </style>
    </head>

    <body>
    	<div class="form-container">
<h4>Add a Member</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		

			{!! Form::open(['url'=>url('/'),'class'=>'register-form']) !!}
			

			<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_title" type="text" class="validate" name="name">
					<label for="user_title" class="center-align">Member Name:</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_spouse" type="text" class="validate" name="spouse">
					<label for="user_spouse" class="center-align">Spouse Name:</label>
				</div>
			</div>

						<div class="row margin">
				<div class="input-field col s6">
					
					<input id="user_joining" type="text" onfocus="(this.type='date')" class="validate" name="joining">
					<label for="user_joining" class="center-align">Year of Joining Rotary</label>
				</div>

				<div class="input-field col s6">
					
					<input id="user_title" type="text" onfocus="(this.type='date')" class="validate" name="dob">
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
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
      <!--JavaScript at end of body for optimized loading-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script src="http://demo.geekslabs.com/materialize/v2.2/layout03/js/plugins.js"></script>



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
    </body>
  </html>
        











