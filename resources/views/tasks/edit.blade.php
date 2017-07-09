@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のTASK編集ページ</h1>

　　@include('commons.error_tasks')

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}


       {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}


        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection