@extends('layouts.layout')
@section('title')
    Товары и услуги
@stop
@section('content')
{!! Form::open(['route' => 'home.store', 'files' => 'true']) !!}


	<div class="form-group">

    {!! Form::label('title', 'Название товара:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
    {!! Form::label('izmer', 'Единицы измерения:', ['class' => 'control-label']) !!}
    {!! Form::text('izmer', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
    {!! Form::label('price', 'Цена:', ['class' => 'control-label']) !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
    {!! Form::label('otovare', 'Описание товара:', ['class' => 'control-label']) !!}
    {!! Form::textarea('otovare', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
    {!! Form::label('image', 'Изображение товара:', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
    {!! Form::label('type', 'Тип товара:', ['class' => 'control-label']) !!}
    {!! Form::number('type', null, ['class' => 'form-control']) !!}
	</div>
	{!! Form::submit('Добавить товар', ['class' => 'btn btn-primary']) !!}
		{{ csrf_field() }}	


{!! Form::close() !!}

@stop