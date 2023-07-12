<x-layout title="To Do List">
    <a href="/create" class="btn btn-dark mb-2">Add new To Do</a>
    @isset($msgSuccess)
    <div class="alert alert-success">
        {{ $msgSuccess }}
    </div>
    @endisset
   <ul class="list-group">
    @foreach ($items as $item)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $item->content }}
            <span class="d-flex">
                <a href="{{ route('edit', $item->id) }}" class="btn btn-primary btn-sm">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAi0lEQVR4nMXTwQnCMBSA4Vyk0LP3ogO4TmfQIbQTdQm9SnEe0U9KK0RBME2h/yU5fbwHSQhLhi2KXORoqMN6KlL7rEueDCVWaCPoiU0K0uDWr/KFnVKRdzFWT0VirMxFstZZFtn/QJq/kREq8MhGwnBecZ+E9OGC3Xjv38khpIZqnOA8x6+usoC5egHg30FKKwoupAAAAABJRU5ErkJggg==">
                </a>
                <form action="{{ route('destroy', $item->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sn">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAmklEQVR4nMXSsQ2CQBjFcQoa5yDBAbBgAG1xF21xBmgZQheRmglodAj+huQKYsLjQaEvec3lu1/uSy6KfhXgAGRbLmZAM2kXOj3TMNDjp1dQEl7kNFFQ/rVCI5or6LRitaOC9iugVEE7YDCQYZydhQL2NqCXRALUGtDTgR4GdHeg2oAqB7oa0MWBzgZUOFAM3MSPLseZRejv+QBYqUFh1TfIDgAAAABJRU5ErkJggg==">
                    </button>
                </form>
            </span>
        </li>
    @endforeach
   </ul>
</x-layout>