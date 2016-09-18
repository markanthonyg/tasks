
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EMRS Backlog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<!-- Salvattore -->
	<link rel="stylesheet" href="{{asset('css/salvattore.css')}}">
	<!-- Theme Style -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="#">EMRS Backlog</a></h1>
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
					<a class="navbar-brand" href="#">EMRS Backlog</a>
					<br/>
					<button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				    New Task <span class="badge">{{$tasks->count()}}</span>
					</button>
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">What to do...</h4>
      </div>
      <div class="modal-body">
				{!! Form::open(['action' => 'HomeController@storeTask']) !!}

					<div class="input-group">
						{!! Form::text('content', null, ['placeholder' => 'Description...', 'class' => 'form-control']) !!}
						<div>
							{!! Form::label('Story Points: ') !!}
							{!! Form::number('story_points', 0, ['placeholder' => 'Story Points', 'class' => 'form-control', 'min' => '0', 'max' => '9']) !!}
						</div>
						<div>
							{!! Form::label('Business Value: ') !!}
							{!! Form::number('business_value', 0, ['placeholder' => 'Business Value', 'class' => 'form-control', 'min' => '0', 'max' => '9']) !!}
						</div>
					</div>

      </div>
      <div class="modal-footer">
				<div class="row">
					{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
					{{Form::close()}}
				</div>
		  </div>
    </div>

  </div>
</div>

	<div id="fh5co-main">
		<div class="container">

			<div class="row">

        <div id="fh5co-board" data-columns>

					@if (empty($tasks))
						<h1>No tasks to display!</hi>
					@else
						@foreach ($tasks as $task)
							<div class="item">
								<div class="animate-box">
									<a href="{{asset('images/num'.$task->business_value.'.png')}}" class="image-popup fh5co-board-img" title="{{$task->content}}"><img src="{{asset('images/num'.$task->business_value.'.png')}}" alt="Free HTML5 Bootstrap template"></a>
								</div>
								<div class="fh5co-desc"><strong>{{$task->content}}</strong><br/><span class="label label-success">Story Points: {{$task->story_points}}</span><br/><span class="label label-info">BV: {{$task->business_value}}</span></div>
							</div>
						@endforeach
					@endif
        </div>
        </div>
       </div>
	</div>
	<!--<span class="label label-default">Story Points: {{$task->story_points}}</span>-->
	<!--<div class="alert alert-success" role="alert">Story Points: {{$task->story_points}}</div>-->

	<footer id="fh5co-footer">

		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p><small>&copy; Hydrogen Free HTML5 Template. All Rights Reserved. <br>Designed by: <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> | Images by: <a href="http://pexels.com" target="_blank">Pexels</a> </small></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Salvattore -->
	<script src="{{asset('js/salvattore.min.js')}}"></script>
	<!-- Main JS -->
	<script src="{{asset('js/main.js')}}"></script>




	</body>
</html>
