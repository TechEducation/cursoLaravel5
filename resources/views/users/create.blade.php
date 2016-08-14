@extends('layouts.app')

@section('content')

{!! Form::open(array('route' => 'user.store', 'method' => 'POST')) !!}
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            {!! Form::label('Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre...', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            {!! Form::label('E-mail') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su email...', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            {!! Form::label('Password') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña...', 'required']) !!}
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        {!! Form::submit('Registrarme', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@endsection