<html>
@foreach($name as $l)
	<div>{{ HTML::link('/oneArticle/'  . $l , 'Article' . $l )}}</div>
		@endforeach
</html>
