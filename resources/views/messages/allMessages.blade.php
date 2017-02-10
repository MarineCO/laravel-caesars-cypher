<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des messages</title>
</head>
<body>
	<h1>Message list</h1>

	<table>
		<tr>
			<td>Id : </td>
			<td>Content : </td>
		</tr>

		@foreach ($messages as $mess)

		<tr>
			<td>{{ $mess->id }}</td>
			<td>{{ $mess->content }}</td>
			<td>
				<form action="/messages/delete/{{$mess->id}}" method="POST">{{csrf_field()}}
				{{ method_field('DELETE') }}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button>Delete</button>
				</form>
			</td>
		</tr>
		
		@endforeach

	</table>

	<form action="/messages/add">
		<button>Encrypt a new message</button>
	</form>
</body>
</html>