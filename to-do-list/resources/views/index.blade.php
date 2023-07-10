<x-layout title="To Do List">
    <a href="/create">Add new To Do</a>
   <ul>
    @foreach ($items as $item)
        <li>{{ $item->content }}</li>
    @endforeach
   </ul>
</x-layout>