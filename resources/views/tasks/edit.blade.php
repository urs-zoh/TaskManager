@extends("layouts.layout")

@section('Content')
<h1>Edit Task</h1>
<form method="POST" action="{{ route('home.update', $task->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="titleId" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="titleId" value="{{ $task->title }}">
    </div>
    <div class="mb-3">
        <label for="descriptionId" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="descriptionId" value="{{ $task->description }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
