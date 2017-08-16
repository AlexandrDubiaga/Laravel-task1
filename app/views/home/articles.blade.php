<html>
@foreach($link as $l)
	HTML::link('/articles/{{{$l}}}')
		@endforeach
</html>
