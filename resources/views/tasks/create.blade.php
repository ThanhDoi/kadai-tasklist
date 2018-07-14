@extends ('layouts.master')

@section ('content')

    <h1>Create new task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('content', 'Status') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection