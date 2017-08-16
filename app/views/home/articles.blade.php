<html>
@foreach($link as $l)
	<div>{{HTML::link('/articles/'. $l)}}</div>
		@endforeach
</html>
