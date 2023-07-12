<x-layout title="Create To Do">
   <form method="post" action="{{ route('store') }}">
    @csrf
    <div class="form-group mb-3">
        <label class="form-label">Add a new To Do:</label>
        <input type="text" name="content" id="content" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
   </div>
</x-layout>