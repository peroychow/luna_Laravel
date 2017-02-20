<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	</head>
	<body>
		{{ Form::open(array('url'=>'login', 'class'=>'form-inline')) }}
			<fieldset>
				<hr>
				<div class="form-group"> 
					{{ Form::text('name', Input::old('name'), array('class' => 'form-control','placeholder'=>'Email')) }}
				</div>
				<div class="form-group"> 
					{{ Form::text('password', Input::old('password'), array('class'=>'form-control', 'placeholder'=>'Password')) }}
				</div>
				{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
				<hr>
			</fieldset>
		{{ Form::close() }}
	</body>
</html>