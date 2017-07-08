@extends('layouts.app')

@section('content')

 <h1>TASK一覧</h1>

    @if (count($tasks) > 0)
        <ul>
             @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
             @endforeach
        </ul>
        
    @endif
    
     {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('GO') !!}

    {!! Form::close() !!}
   

@endsection