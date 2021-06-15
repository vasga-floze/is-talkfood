<x-app-layout>
    <x-slot name="header">
        <form class="form-inline my-4 my-lg-0">
            <a class="nav-link mx-auto" href="{{ url('/aboutme') }}"><span>Acerca De</span></a>

            <a class="nav-link mx-auto" href="{{ url('/favorites') }}"><span>Favoritos</span></a>

            <a class="nav-link mx-auto" href="{{ url('/recipebook') }}"><span>Recetario</span></a>
        </form>
    </x-slot>
</x-app-layout>

<!--Adds personal recipe layouts-->
<h2 class="text-center">Mis Recetas</h2>

<div class="card">
    <div class="card-body px-5 py-3 border-bottom rounded-top">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mx-auto my-auto">
                <div class="card shadow">
                    <a href="/form">
                        <img src="{{ asset('images/Add_files.png') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Agregar Receta</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/cookBarbecue.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Receta</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Publicación hace una hora</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/cookBarbecue.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Receta</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Publicación hace una hora</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/cookBarbecue.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Receta</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Publicación hace una hora</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/cookBarbecue.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la Recetae</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Publicación hace una hora</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>