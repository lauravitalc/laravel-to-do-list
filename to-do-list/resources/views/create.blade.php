<x-layout title="To Do List">
   <form method="post" action="/save">
    @csrf
    <div class="form-group">
        <label>Add a new To Do:</label>
        <input type='text' name='content' id='content'>
        <button type="submit">Add</button>
    </div>
   </div>
</x-layout>