@extends('layouts.layout')
@section('title')
    Аренда опалубки Севастополь.
@stop
@section('content')
    <div class="raw">
    <h1 style="text-align: center;">Товары и услуги:</h1>
    </br>
    @foreach($tasks as $task)
        <div class="lots col-xs-3 col-md-3 col-lg-3" style="height: 200px;">
            <div class="thumbnail">
                <a  href="{{'/goods/'.$task->id}}">     
                    <img id="lot-images" data-original="{{$task->image}}"  src="{{$task->image}}">
                <p id="lot-text">{{$task->title}}</p>
                <p style="font-size: 15px; text-align: center; color: red;">1 {{$task->izmer}} {{$task->price}} руб</p>
                </a>
            </div>
        </div>
    @endforeach    
    </div>
    

@stop