@extends('layouts.app')

@section('content')

<h1>id: {{ $task->id }} のTASK編集ページ</h1>

　　@include('commons.error_tasks')

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}

       
       {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection