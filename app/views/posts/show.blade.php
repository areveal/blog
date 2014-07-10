@extends('layouts.blog-post')

@section('topscript')
	<title>Blog Post</title>
	<style>
		.body {
			text-align: center;
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

   {{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
   {{ Form::close() }}

   <script type="text/javascript">
	   $(".deletePost").click(function() {
	       var postId = $(this).data('postid');
	       $("#deleteForm").attr('action', '/posts/' + postId);
	       if(confirm("Are you sure you want to delete post")) {
	           $('#deleteForm').submit();
	       }
	   });
	</script>
@stop