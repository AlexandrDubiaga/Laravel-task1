<html>
@foreach($link as $l)
	<div> {{ HTML::lint(/article/$l)}} <p>LINK</p> </div>
		@endforeach
</html>
