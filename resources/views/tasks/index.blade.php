@extends ('layouts.master')

@section ('content')

    <ul>
        @foreach ($tasks as $task)
            <li>
                {!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }} - Status: {{ $task->status }}
            </li>
        @endforeach
    </ul>
    
    {!! link_to_route('tasks.create', 'Create new task') !!}

@endsection