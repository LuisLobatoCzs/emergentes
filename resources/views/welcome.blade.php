@extends('layouts.app')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <title>Tu profe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
		
			html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			.midiv {
				background-color: #424242;
			}
			.midiv:hover {
				background-color: #00F;
			}
        </style>
    </head>
    @section('content')
	<body>
		<div><font color="#424242">
			<div class="flex-center position-ref full-height">
				<div class="content">
					<div class="title m-b-md">
						<img src="{{ asset('Images/logo2.png') }}" alt="logo" class="img-responsive">
						<button type="button" class="btn btn-success">
							<a href="#one"><font color="white">
								<h4>Comenzemos</h4></font>
							</a>
						</button>
					</div>
				</div>			
            </div>			
        </div>
    </body>
	@endsection
</html>
