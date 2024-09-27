@extends("layouts.layout")

@section('Content')
<h1>List tasks</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th> <!-- Add a column for actions -->
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr scope="row">
            <td>{{$task->id}}</td>
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
            <td>
                <a href="{{ route('home.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('home.delete', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('home.create') }}" class="btn btn-primary mb-3">Create New Task</a> <!-- Create Task Button -->
@endsection