<html>
@foreach($link as $l)
	<a href"{{URL::to('articles')}}">LINK {{$l}}</a><br>
		@endforeach
</html>
