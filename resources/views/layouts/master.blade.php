<!DOCTYPE html>
<html>
<head>
	<title>Latihan Template</title>
</head>
<body>
	@include('template.header')<br>
		@yield('konten')<br>
	@include('template.footer')
</body>
</html>