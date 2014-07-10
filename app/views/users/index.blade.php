@extends('layouts.master')

@section('topscript')
	<title>List All </title>
	<style>
		.body {
			text-align: center;
		}
	</style>
@stop

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <table class="table table-striped">
                	<tr>
                		<th>User Name</th>
                		<th>Email</th>
                		<th>Date Created</th>
                		<th>Role</th>
                		<th>Remove</th>
                	</tr>
                	@foreach($users as $user)
                		<tr>
                			<td>{{{ $user->first_name . ' ' . $user->last_name}}}</td>
                			<td>{{{ $user->email}}}</td>
                			<td>{{{ $user->created_at->format('F jS Y') }}}</td>
                			<td>{{{ $user->role }}}</td>
                			<td><a href="#" class="deleteUser btn btn-danger btn-sm" data-userid="{{ $user->id }}">Delete</a></td>
                		</tr>
                	@endforeach
                </table>

            </div>
        </div>
    </div>

    {{ Form::open(array('action' => 'UsersController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
    {{ Form::close() }}

    <script type="text/javascript">
	    $(".deleteUser").click(function() {
	        var userId = $(this).data('userid');
	        $("#deleteForm").attr('action', '/users/' + userId);
	        if(confirm("Are you sure you want to delete user?")) {
	            $('#deleteForm').submit();
	        }
	    });
	</script>
@stop
