@extends('layouts.blog-post')

@section('topscript')
	<title>{{{ $post->slug }}}</title>
	<style>
		.body {
			text-align: center;
		}
		label {
			color:#fff;
		}
		#comment_header {
			color: #fff;
		}
		#disqus_thread {
			color: #fff
		}
	</style>
@stop

@section('NavBlog')
	<li><a href="{{action('PostsController@index')}}">Blog</a></li>
@stop

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h1 class="intro-text text-center"><strong>{{ $post->title}}</strong>
                </h1>
                @if($post->img_path)
                <hr>
					<img src="{{{$post->img_path}}}" class="img-responsive img-border">
				@endif
                <hr>
                <center class="body">{{$post->renderBody()}}</center>
                <hr>
    			<center>{{{$post->updated_at->format('F jS Y @ h:i:s A')}}}</center>
    			<hr>
    			<center>{{ link_to_action('UsersController@show', $post->user->first_name . ' ' . $post->user->last_name , array($post->user->id)) }}</center>
				@if(Auth::check())
					@if(Auth::user()->role == 'admin' || Auth::user()->email == $post->user->email)
						<hr>
						<center>
							{{ link_to_action('PostsController@edit', 'Edit', array($post->id), array('class' => 'btn btn-default') )}}		
							<a href="#" class="deletePost btn btn-danger btn-sm" data-postid="{{ $post->id }}">Delete</a>	
						</center>
					@endif
				@endif
            </div>
        </div>
    </div>

    <!--Form for deleting posts-->
    {{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
    {{ Form::close() }}

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'colereveal'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    


    <script type="text/javascript">
	    $(".deletePost").click(function() {
	        var postId = $(this).data('postid');
	        $("#deleteForm").attr('action', '/posts/' + postId);
	        if(confirm("Are you sure you want to delete post?")) {
	            $('#deleteForm').submit();
	        }
	    });

	    $(".deleteComment").click(function() {
	        var commentId = $(this).data('commentid');
	        $("#deleteFormComment").attr('action', '/comment/' + commentId);
	        if(confirm("Are you sure you want to delete comment?")) {
	            $('#deleteFormComment').submit();
	        }
	    });

	</script>
@stop