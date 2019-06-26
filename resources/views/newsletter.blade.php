@extends('layout')
<h4>Add a News Letter</h4>	
<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		<form class="register-form">        
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_title" type="text" class="validate">
					<label for="user_title" class="center-align">Title</label>
				</div>
			</div>
				<div class="row margin">
				<div class="input-field col s12">
					
					<input id="user_name" type="text" class="validate">
					<label for="file_url" class="center-align">File URL</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					
					<input id="url" type="email" class="validate">
					<label for="url" class="center-align">URL</label>
				</div>
			</div>
			
			


			<div class="row">
				<div class="input-field col s12">
					<a href="register.html" class="btn waves-effect waves-light col s12">Save</a>
				</div>
				
			</div>
		</form>
	</div>
</div>
@stop
        












