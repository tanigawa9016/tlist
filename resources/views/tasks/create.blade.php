@extends('layouts.app')

@section('content')

<h1>TASK新規作成ページ</h1>

     @include('commons.error_tasks')

    {!! Form::model($task, ['route' => 'tasks.store']) !!}


        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('GO') !!}

    {!! Form::close() !!}

@endsection