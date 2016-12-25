@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        <h1>Все товары и услуги представленые на сайте</h1>
        <h1><a class="btn btn-primary" href="{{ URL::to('home/create') }}">Добавить</a></h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Название</th>
                    <th>Ед.измер.</th>
                    <th>Цена</th>
                    <th>О товаре</th>
                    <th>Изображение</th>
                    <th>Тип</th>
                </tr>
            </thead>  
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <th>{{$task->id}}</th>
                    <th>{{$task->title}}</th>
                    <th>{{$task->izmer}}</th>
                    <th>{{$task->price}}</th>
                    <th>{{$task->otovare}}</th>
                    <th><img id="lot-images" src="{{$task->image}}"></th>
                    <th>{{$task->type}}</th>
                    <th>
                        <div class="upravlenie_bd">
                            </br>
                            <a class="btn btn-primary" href="{{ URL::to('home/'.$task->id.'/edit')}}">Изменить</a>
                            </br>
                            {!! Form::open(['method' => 'DELETE','route' => ['home.destroy', $task->id]]) !!}
                                {{ csrf_field() }}

                            {!! Form::submit('Delete', ['class' => 'delete_button btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </div>
                    </th>
                </tr>
                @endforeach
            </tbody>      
        </table>
    </div>    
</div>


@stop
