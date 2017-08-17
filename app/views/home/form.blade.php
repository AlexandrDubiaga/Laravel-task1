<html>
<body>
Hello, {{{$name}}}
<form method="POST" action="{{URL::to('form')}}">
<p>Name</p><input  type="text" name="name" /><br>
<p>Message</p><textarea  type="text" name="area"> </textarea><br>
<input type="submit" value="go">
</form>
</body>
</html>
