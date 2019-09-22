<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/mystyle.css')}}">
    <title>Show Results</title>
</head>

<body>
	<div class="container col-md-8 offset-md-2 mt-2">
		
		<h5 class="text-center">Cricket players information</h5>
		<div>
			<table class="table table-bordered">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Age</th>
					<th>Role</th>
					<th>Batting</th>
					<th>Bowling</th>
					<th>Image</th>
					<th>ODI Runs</th>
					<th>Country</th>
				</tr>

				@foreach($result as $player)
				<tr>
					<td>{{$player->id}}</td>
					<td>{{$player->name}}</td>
					<td>{{$player->age}}</td>
					<td>{{$player->role}}</td>
					<td>{{$player->batting}}</td>
					<td>{{$player->bowling}}</td>
					<td class="players-image"><img src="{{asset('images/' . $player->image)}}" alt="{{$player->name}}" style="width:50px; height:auto;"></td>
					<td>{{$player->odiRuns}}</td>
					<td>{{$player->country->name}}</td>

				</tr>
				@endforeach
			</table>
		</div>
		<div">
			<form method="post" action="{{url('/')}}">
				{{csrf_field()}}
				<button class="btn btn-primary" type="submit" name="back">back</button>
			</form>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>