<x-layout title="Edit To Do">
    <form method="post" action="{{ route('update', $item->id) }}">
     @csrf
     @method('PUT')
     <div class="form-group mb-3">
         <label class="form-label">Edit:</label>
         <input type="text" name="content" id="content" class="form-control" value="{{ $item->content }}">
     </div>
     <button type="submit" class="btn btn-primary">Add</button>
    </div>
 </x-layout>