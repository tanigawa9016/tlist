@extends('layouts.app')

@section('content')

<h1>TASK新規作成ページ</h1>

     @include('commons.error_tasks')

 <div class="row">
  <div class="col-xs-6">

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
     
      <div class="form-group">
        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
      </div>

        {!! Form::submit('GO', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
  </div>
 </div>
@endsection