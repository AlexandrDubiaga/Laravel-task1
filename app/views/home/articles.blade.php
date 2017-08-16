<html>
@foreach($name as $l)
	<div>{{ HTML::link('/articles/'  . $l , 'Article' . $l )}}</div>
		@endforeach
</html>
