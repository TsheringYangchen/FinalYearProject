<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BEST_R SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ url('assets/css/heroic-features.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
        
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   
     <!-- Include Boostrap Datepicker-->
     <link rel="stylesheet" href="//cdnjs.cloudfare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
     <link rel="stylesheet" href="//cdnjs.cloudfare.com/ajax/libs/bootstrap-datepicker3/1.3.0/css/datepicker.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('style')

</head>
<br>

@include('front.layouts.nav')
    
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
                <div class="card-body">

                    @if ( $errors->any() )

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @if ( session()->has('msg') )
                        <div class="alert alert-success">{{ session()->get('msg') }}</div>
                    @endif

                    <form action="/user/login" method="post">

                        @csrf

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" name="email" placeholder="Enter Your Email Address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group">
                             <a href="#">   
                                Forgot Your Password?
                            </a>
                        </div><br>
                        <div class="form-group">
                            <button class="btn btn-success col-md-2">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
