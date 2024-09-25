<!-- admin/partials/aside.blade.php -->

<aside class=" admin-sidebar bg-dark text-white vh-100 p-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{[route('admin.home')]}">HOME</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.posts.index') }}">ELENCO POST</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.posts.create') }}">NUOVO POST</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.typePosts') }}">POST PER CATEGORIA</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.types.index') }}">GESTIONE CATEGORI</a>
        </li>
    </ul>
</aside>
