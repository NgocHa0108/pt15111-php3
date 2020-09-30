<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<style type="text/css">
		h3{
			color: red;
		}
	</style>
</head>
<body>

	<header><h1 class="header">@yield('header')</h1></header>


@yield('content')


	<footer><h1>@yield('footer')</h1></footer>
</body>
</html>