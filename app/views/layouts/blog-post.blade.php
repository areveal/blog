<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--jquery-->   
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!--jquery-->   
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- twitter bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="/business-casual/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/business-casual/css/business-casual.css" rel="stylesheet">
    @yield('topscript')
    <style>

        .user_email {
            position: relative;
            top:0px;
            left: 0px;
            color: #fff;
        }
        .edit_user {
            position: relative;
            top: 0px;
            left: 45px;
        }
        .create_user {
            position: relative;
            top: 0px;
            left: 90px;
        }
    </style>
</head>

<body>

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif

    @if (Auth::check())
        <a href="{{action('HomeController@logout')}}" class="log-in btn btn-danger">Log Out</a>
        {{ link_to_action('UsersController@edit', 'Edit User', array(Auth::user()->id), array('class' => 'edit_user btn btn-default') )}}
        @if(Auth::user()->role == 'admin')
            {{ link_to_action('UsersController@create', 'Create New User', null, array('class' => 'btn btn-default create_user') ) }}
        @endif
        <h4 class="user_email">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h4>
    @else
        <a href="{{action('HomeController@showLogIn')}}" class="log-in btn btn-success">Log In</a>
    @endif

    <div class="brand">Cair Laravel</div>
    <div class="address-bar">5623 Hamilton Wolfe Rd. | San Antonio, Texas 78240</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>

            <!--Collect the nav links, forms, and other content for toggling-->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{action('HomeController@showHome')}}">Home</a>
                    </li>
                    <li><a href="{{action('HomeController@showResume')}}">Resume</a>
                    </li>
                    <li><a href="{{action('HomeController@showPortfolio')}}">Portfolio</a>
                    </li>
                    @yield('NavBlog')
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <hr>
                    <h2>
                        <small>By <strong>Cole Reveal</strong></small>
                    </h2>
                    <hr>
                </div>
            </div>
        </div>

        @yield('content')


    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Cole Reveal 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="/business-casual/js/jquery-1.10.2.js"></script>
    <script src="/business-casual/js/bootstrap.js"></script>

</body>

<script>
    setTimeout(function(){
        $('.alert').fadeOut()
    },2000);
</script>

</html>

