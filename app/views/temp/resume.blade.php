@extends('layouts.master-blog')

@section('topscript')
	<title>My Resume</title>

	<link rel="stylesheet" type="text/css" href="resume.css">

@stop

@section('content')
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Cole Reveal</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#education">Education</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#training">Training</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#experience">Work Experience</a>
                    </li>
                    <li class="">
                        <a href="{{action('HomeController@showPortfolio')}}">Portfolio</a>
                    </li>
                    <li class="">
                        <a href="{{action('HomeController@showHome')}}">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


        <div class="wrap">
           
           	<div class="content">
           		<header>
			        <div class="container">
			            <div class="row">
			                <div class="col-lg-12">
			                    <img class="img-responsive" src="img/face.png" alt="pandas">
			                    <div class="intro-text">
			                        <span class="name">Cole Reveal</span>
			                        <hr class="star-light">
			                        <span class="skills">Web Developer - Problem Solver</span><br>
                              <span class="skills">alexi.reveal@gmail.com</span>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </header>

                <div class="education" id="education">
                  <h1>Education</h1>
                  <p class="article-content">GPA : 3.51</p>
                  <p class="article-content">College: University of Texas at San Antonio</p>                  
                  <p class="article-content">Graduated : May 2012 Cum Laude</p>
                  <p class="article-content">Degree : B.S. in Mathematics</p>
                  <p class="article-content">I have an extensive education background in problem solving.</p>
            	</div>


            	<div class="gray-wrapper">
                <div class="training" id="training">
                        <h1>Training</h1>
                      <h4>CodeUp</h4>
                      <p class="article-content">A 12 week intensive bootcamp style web development training. Full LAMP stack training.</p>
                      	
                      <h4 id='languages'>Languages</h4>
                      <ul class="features">
                            <li>PHP</li>
                          	<li>Laravel</li>
                          	<li>JS</li>
                          	<li>JQuery</li>
                          	<li>MySQL</li>
                          	<li>HTML</li>
                          	<li>CSS</li>
                      </ul>
                </div>
            	</div>

            	<div class="work_experience" id="experience">
                        <h1>Work Experience</h1>
                      <ul class="features" id='not_so_far'>
                            <li>
                              <h4>New Balance</h4>
                              <h5>Fitting Specialist</h5>                                                            
                              <p>Sales: Met biweekly sales quotas and percentages.</p>
                              <h5>Feb 2013-Apr2014</h5>
                          	</li>
                          	<li>
                              <h4>Starbucks</h4>
                              <h5>Barista</h5>                                                            
                              <p>Customer Service: Excellent customer service to every customer.</p>
                              <h5>Jun 2011-Feb2013</h5>
                          	</li>
                          	<li>
                              <h4>NCAA Div I Athlete</h4>
                              <h5>Long Distance</h5>                                                            
                              <p>Competition: Mid distance specialist for track and field.</p>
                              <h5>Jul 2008-May2012</h5>
                          	</li>
                          	<li>
                              <h4>NCAA Captain</h4>
                              <h5>Captain</h5>                                                            
                              <p>Leadership: Led team to 6 championships in 4 years.</p>
                              <h5>Jul 2008-May2012</h5>
                          	</li>
                          	<li>
                              <h4>Frisco Rec Center</h4>
                              <h5>Rec-Aide</h5>                                                            
                              <p>Child Care: Supervised children.</p>
                              <h5>Jan 2008-Sept 2009</h5>
                          	</li>
                          	<li>
                              <h4>Concordia Lutheran Day Care Center</h4>
                              <h5>Co-Teacher</h5>                                                            
                              <p>Child Care: Designed and implemented math curriculum for 5th grade children.</p>
                              <h5>May 2010-Sept 2010</h5>
                          	</li>
                      </ul>
            	</div>


            	
            	</div>

        </div>
    

		<div id="window-resizer-tooltip" style="display: none;">
			<a href="#" title="Edit settings" style="background-image: url(chrome-extension://kkelicaakdanhinjdeammmilcgefonfh/images/icon_19.png);"></a><span class="tooltipTitle">Window size: </span><span class="tooltipWidth" id="winWidth">1280</span> x <span class="tooltipHeight" id="winHeight">700</span><br><span class="tooltipTitle">Viewport size: </span><span class="tooltipWidth" id="vpWidth">1280</span> x <span class="tooltipHeight" id="vpHeight">330</span>
		</div>



@stop

@section('bottomscript')
	
@stop