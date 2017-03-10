@php
	defined('BASEPATH') OR exit('No direct script access allowed');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>
	@foreach ($users as $key => $user)
	<p>This is user {{ $user['name'] }}</p>
@endforeach

</body>
</html>
