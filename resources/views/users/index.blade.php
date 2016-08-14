@extends('layouts.app')

@section('content')
	<table class="table table-striped">
	  	<thead>
	  		<th>ID</th>
	  		<th>Nombre</th>
	  		<th>E-Mail</th>
	  		<th>Creado el</th>
	  		<th>Acciones</th>
	  	</thead>
	  	@foreach($users as $user)
		  	<tbody>
		  		<th>{{ $user->id }}</th>
		  		<th>{{ $user->name }}</th>
		  		<th>{{ $user->email }}</th>
		  		<th>{{ $user->created_at->format('d/m/y') }}</th>
		  		<th>
		  			<button class="btn btn-primary btn-xs">Editar</button>
		  		</th>
		  	</tbody>
	  	@endforeach
	</table>
@endsection