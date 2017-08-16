<html>
@foreach($link as $l)
	<div> {{ URL::to('articles')}}  <p>LINK</p> {{$l}} </div>
		@endforeach
</html>
