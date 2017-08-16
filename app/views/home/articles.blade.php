<html>
@foreach($link as $l)
	<div> {{ URL::to('articles' $l)}} <p>LINK</p> </div>
		@endforeach
</html>
