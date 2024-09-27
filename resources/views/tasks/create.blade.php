@extends("layouts.layout")

@section('Content')
<h1>Create Task</h1>
<form method="POST" action="{{ route('home.assistant_create') }}">
    @csrf
    <div class="mb-3">
        <label for="titleId" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="titleId">
    </div>
    <div class="mb-3">
        <label for="descriptionId" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="descriptionId">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection