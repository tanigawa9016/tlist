@extends('layouts.app')

@section('content')

<h1>TASK新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('GO') !!}

    {!! Form::close() !!}

@endsection