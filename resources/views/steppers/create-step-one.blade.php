<x-app-layout>
    <x-slot name="header">
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('steppers.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Paso 1: Información Básica de tu receta</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="title">Nombre de la receta:</label>
                            <input type="text" value="{{ $product->name ?? '' }}" class="form-control" id="taskTitle"  name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <input type="text"  value="{{{ $product->amount ?? '' }}}" class="form-control" id="productAmount" name="amount"/ required>
                        </div>

                        <div class="form-group ">
                            <label for="exampleFormControlSelect1">Categoria de receta</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Seleccionar categoria</option>
                                <option>Salvadoreña</option>
                                <option>Mexicana</option>
                                <option>Italiana</option>
                                <option>Francesa</option>
                                <option>Argentina</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-dark">Siguiente</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>