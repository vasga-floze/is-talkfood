<x-app-layout>
    <x-slot name="header">
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">BIENVENIDO LISTO PARA CREAR RECETA</div>
  
                <div class="card-body">
                      
                    <a href="{{ route('steppers.create.step.one') }}" class="btn btn-primary pull-right">CREAR RECETA</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="/recipebook">
                    <button type="submit" class="btn btn-dark">Volver</button>
                </a>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
