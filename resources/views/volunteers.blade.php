@extends('layout')
@section('content')
	<table id="volunteer"
	class="table centered highlight striped" 
	>
		
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Event</th>

				</tr>
			</thead>
			<tbody>
			
				<?php 
				$i=1;
				?>
				@foreach($volunteers as $v)
					<tr>
						<td>{{$i}}</td>
						<td>{{$v->name}}</td>
						<td>{{$v->title}}</td>		
					</tr>
					<?php 
				$i+=1;
				?>
				@endforeach
			</tbody>
		</table>
	
@stop
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#volunteer').DataTable();
		})
	</script>
@stop