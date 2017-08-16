<html>
@foreach($link as $l)
	<div> {{ HTML::link(/articles/$l)}} <p>LINK</p> </div>
		@endforeach
</html>
