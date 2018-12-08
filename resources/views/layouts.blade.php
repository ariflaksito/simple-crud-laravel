<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body class="container">

<h1>@yield('title')</h1>

@yield('content')

</body>
</html>


