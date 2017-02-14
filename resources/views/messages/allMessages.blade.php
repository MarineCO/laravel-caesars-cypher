<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des messages</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<div class="ui centered grid">
		<div class="four wide column">
			<div class="ui center aligned container">
				<h1>Message list</h1>
			</div>

			@foreach ($messages as $mess)

			<div class="ui centered card">
				<div class="ui center aligned segment">
					<h2>{{ $mess->id }} : {{ $mess->content }}</h2>
					<p>
						<form action="/messages/delete/{{$mess->id}}" method="POST">{{csrf_field()}}
							{{ method_field('DELETE') }}
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button class="ui fluid red button">Delete</button>
						</form>
					</p>
					<p>
						<form action="/messages/decipher/{{$mess->id}}" method="GET">
							<button class="ui fluid yellow button">Decrypt a message</button>
						</form>
					</p>
				</div>
			</div>

			@endforeach

			<form action="/messages/add" class="ui center aligned container">
				<button class="big ui green button">Encrypt a new message</button>
			</form>

		</div>
	</div>
</body>
</html>