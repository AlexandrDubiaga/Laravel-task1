<html>
@foreach($link as $l)
	<div>{{HTML::link('/articles/')}} LINK {{$l}}</div>
		@endforeach
</html>
