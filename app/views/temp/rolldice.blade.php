@extends('layouts.master')

@section('content')

    <h1>Roll was, {{{ $roll }}}!</h1>	
	<h1>Guess was, {{{ $guess }}}!</h1>

	@if ($guess == $roll)  
		<h1 style="color:green">You win!!</h1>
	@else  
		<h1 style="color:blue">Try again!</h1>
	@endif

@stop