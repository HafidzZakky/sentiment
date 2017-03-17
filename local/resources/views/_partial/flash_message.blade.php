@if(Session::has('flash_message'))
	<div class="alert alert-success {{ Session::has('penting')? 'alert-important' : ''}}">
		<button type="button" class="close" data-dismiss='alert' aria-hidden= 'true'>&times;</button>
		<b>{{Session::get('flash_message')}}</b>
	</div>
@endif