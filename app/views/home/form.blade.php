<html>
<body>
Hello, {{{$name}}}
<form method="POST" action="{{URL::to('form')}}">
<p>Name</p><input  type="text" name="name" /><br>
<p>message</p><textarea  type="text" name="area"> </textarea><br>
<br>
<input type="submit" val="go">
</form>
</body>
</html>
