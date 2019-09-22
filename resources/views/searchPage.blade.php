<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <title>Search</title>
</head>

<body>
	<form class="mt-5" method="post" action="{{url('/showPlayers')}}">
	{{csrf_field()}}
		<div class="container form-group offset-md-4">
			<label for="roles">Select Cricket players role</label>
			<div class="input-group">
				<select class="form-control custom-select col-md-4" name="role" id="roles">
					<option selected>Show All</option>
					@foreach ($roles as $role){
					<option value="{{$role}}">{{$role}}</option>
					@endforeach
				</select>
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary" name="submit">Search</button>
				</div>
				
			</div>
			
		</div>
	
	</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</html>