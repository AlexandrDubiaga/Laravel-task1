<html>
@foreach($link as $l)
	<a href"{{HTML::link('articles')}}">LINK {{$l}}</a><br>
		@endforeach
</html>
