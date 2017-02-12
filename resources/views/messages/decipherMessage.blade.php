<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Decrypt a message</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	
	<div class="ui centered grid">
		<div class="four wide column">
			<form class="ui form" action="/message/decipherMessage" method="POST">{{csrf_field()}}
				{{ method_field('PUT') }}

				<div class="field">
					<label for="content">Message</label>
					<input id="content" type="text" name="content" value="{{$decipher->content}}"/>
				</div>
				<div class="field">
					<label for="offset">Predetermined offset</label>
					<input id="offset" type="text" name="offset" value="{{$decipher->offset}}"/>
				</div>
				<div class="field">
					<label for="offset">Choose the offset for decrypt</label>
					<input id="offset" type="text" name="offset"/>
				</div>

				<input class="ui fluid yellow button" type="submit" value="Decrypt"/>
			</form>
		</div>
	</div>

</body>
</html>