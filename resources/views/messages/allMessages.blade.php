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

			<div class="ui card">
				<div class="ui center aligned segment">
					<p>{{ $mess->id }} : {{ $mess->content }}</p>
					<p>
						<form action="/messages/delete/{{$mess->id}}" method="POST">{{csrf_field()}}
							{{ method_field('DELETE') }}
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button class="ui red button">Delete</button>
						</form>
					</p>
				</div>
			</div>

			@endforeach

			<form action="/messages/add">
				<button class="big ui fluid green button">Encrypt a new message</button>
			</form>
		</div>
	</div>
</body>
</html>