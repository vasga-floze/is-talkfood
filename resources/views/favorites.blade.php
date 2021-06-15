<x-app-layout>
    <x-slot name="header">
        <form class="form-inline my-4 my-lg-0">
            <a class="nav-link mx-auto" href="{{ url('/aboutme') }}"><span>Acerca De</span></a>

            <a class="nav-link mx-auto" href="{{ url('/favorites') }}"><span>Favoritos</span></a>

            <a class="nav-link mx-auto" href="{{ url('/recipebook') }}"><span>Recetario</span></a>
        </form>
    </x-slot>
</x-app-layout>

<h2 class="text-center">Mis Recetas favoritas</h2>
<div class="card">
    <div class="card-body px-5 py-3 border-bottom rounded-top">
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col mx-auto my-auto">
                <div class="card shadow">
                    <img src="{{ asset('images/like.png') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/food.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de la receta</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 days ago</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/food.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Name</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 2 weeks ago</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/food.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Name</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 6 months ago</small>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow">
                    <img src="{{ asset('images/food.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Recipe Name</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 1 year ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>