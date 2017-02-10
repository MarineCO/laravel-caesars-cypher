<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a message</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>

	<div class="ui centered grid">
		<div class="four wide column">
			<form class="ui form" action="/messages/addMessage" method="POST">{{csrf_field()}}
				
				<div class="field">
					<label for="content">Message</label>
					<input id="content" type="text" name="content"></input>
				</div>
				<div class="field">
					<label for="offset">Offset</label>
					<input id="offset" type="text" name="offset"/>
				</div>

				<input class="ui yellow button" type="submit" value="Add the new message"/>
			</form>
		</div>
	</div>

</body>
</html>