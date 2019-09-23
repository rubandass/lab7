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
	<div class="container-fluid col-md-10 mt-2">
		<h4 class="text-center text-dark">Cricket players information</h4>
		<div class="row">
			
			@foreach($result as $player)
				<div class="col-md-4 space_div">
					<div class="card border-0 br-5" style="width: 18rem;">
						<div class="ribbon">
							<span class="ribbon1">
							  <span>{{$player->country->name}}</span>
							</span>
						</div>
						
						<img class="card-img-top" src="{{asset('images/' . $player->image)}}"  alt="{{$player->name}}">
					
						<div class="card-body">
							<h5 class="card-title text-center text-dark">{{$player->name}} ({{$player->age}})<br/></h5>
							<div class="row">
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><b>Id:</b> {{$player->id}}</li>
									<li class="list-group-item"><b>Role:</b> {{$player->role}}</li>
									<li class="list-group-item"><b>Batting:</b> {{$player->batting}}</li>
									<li class="list-group-item"><b>Bowling:</b> {{$player->bowling}}</li>
									<li class="list-group-item"><b>ODI Runs:</b> {{$player->odiRuns}}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>

		<div class="col text-center p-3">
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