@extends ('layouts.master')

@section ('content')

    <h1>Edit TaskId: {{ $task->id }}</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'Content') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('content', 'Status') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection