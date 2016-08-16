@extends('layouts.app')

@section('content')

{!! Form::model($user, array('route' => ['user.update', $user->id], 'method' => 'PUT')) !!}
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            {!! Form::label('Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre...', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            {!! Form::label('E-mail') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Ingrese su email...', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}

{!! Form::model($user, array('route' => ['user.destroy', $user->id], 'method' => 'DELETE')) !!}
    <div class="row control-group">
        {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}

@endsection