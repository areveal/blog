<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cole Reveal</title>

    <!-- Bootstrap core CSS -->
    <link href="/landing-page/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="/landing-page/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="/landing-page/css/landing-page.css" rel="stylesheet">

</head>

<body>

    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Cole Reveal</h1>
                        <h3>Web-developer</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><a href="{{action('HomeController@showResume')}}" class="btn btn-default btn-lg"><span class="network-name">Resume</span></a>
                            </li>
                            <li><a href="{{action('HomeController@showPortfolio')}}" class="btn btn-default btn-lg"><span class="network-name">Portfolio</span></a>
                            </li>
                            <li><a href="{{action('PostsController@index')}}" class="btn btn-default btn-lg"><span class="network-name">Blog</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Resume</h2>
                    <p class="lead">A quick peek at my job, skills, and education. Please <a href="{{action('HomeController@showResume')}}">click here</a> to take a look at my credentials.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="/landing-page/img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Portfolio</h2>
                    <p class="lead">Take a look at my personal and professional projects I have worked on or read a little about me <a href="{{action('HomeController@showPortfolio')}}">here</a>.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="/landing-page/img/doge.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">The Blog</h2>
                    <p class="lead">Not just a blog I write... This is a blog site I created with the help of a few contributing authors. From start to finish this blog was designed by me. Come read some interesting insights <a href="{{action('PostsController@index')}}">here</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="/landing-page/img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect with me:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="https://twitter.com/AlexiColeReveal" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li><a href="https://github.com/areveal" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li><a href="https://www.linkedin.com/pub/alexi-cole-reveal/64/78/187" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- JavaScript -->
    <script src="/landing-page/js/jquery-1.10.2.js"></script>
    <script src="/landing-page/js/bootstrap.js"></script>

</body>

</html>
