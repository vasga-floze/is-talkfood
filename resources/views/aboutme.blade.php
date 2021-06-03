<x-app-layout>
    <x-slot name="header">
        <form class="form-inline my-4 my-lg-0">
            <a class="nav-link mx-auto" href="{{ url('/aboutme') }}"><span>About Me</span></a>

            <a class="nav-link mx-auto" href="{{ url('/favorites') }}"><span>Favorites</span></a>

            <a class="nav-link mx-auto" href="{{ url('/recipebook') }}"><span>Recipe Book</span></a>
        </form>
    </x-slot>
</x-app-layout>
<h2 class="text-center">Biografía</h2>
<div class="card">
    <div class="card-body px-5 py-3 border-bottom rounded-top">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h2 class="text-center">About Me</h2>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, voluptatum?
                    </div>
                    <div class="row">
                        <h2 class="text-center">My Location</h2>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, aperiam?
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{asset('images/profile.png')}}" class="img-fluid">
                    <h2 class="text-center">Mi Nombre</h2>
                </div>
            </div>
        </div>
    </div>
</div>



