@extends('layouts.layout')
@section('title')
    {{$tasks->title}} ЧП Шиленко Севастополь, продажа, аренда, опалубки, лесов, перекрытий.
@stop
@section('content')
<div class="row">
    <div class="col-xs-6 col-md-4 col-lg-4">
        </br>
        <img src="{{$tasks->image}}" style=" width: 90%;">
    </div>
    <div class="col-xs-6 col-md-8 col-lg-8">    
        <h1>{{$tasks->title}}</h1>
        </br>
        <h1 class="price-item">1 {{$tasks->izmer}} {{$tasks->price}} руб</h1>
    </div>
</div>
</br>
<h3 style="margin-top:0px">Описание:</h3>
<p>{{$tasks->otovare}}</p>
@stop