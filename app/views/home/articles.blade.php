<html>
@foreach($name as $l)
	<div>{{HTML::link('/articles/'. $l)}} article {{$l}}</div>
		@endforeach
</html>
