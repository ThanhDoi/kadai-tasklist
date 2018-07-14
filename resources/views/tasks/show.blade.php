@extends ('layouts.master')

@section ('content')

    <h1>TaskId = {{ $task->id }}</h1>

    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'Edit this task', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection