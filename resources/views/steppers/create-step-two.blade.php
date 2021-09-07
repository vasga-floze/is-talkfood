<x-app-layout>
    <x-slot name="header">
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('steppers.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Paso 2: </div>
  
                    <div class="card-body text-center">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                           


                            <div class="form-group text-center">
                                <label for="receta">Agregar paso de la receta</label>
                                <input  class="form-control" id="receta" required>
                            </div>
  
  
                         

                            <center>
                                <div class="col-5 mb-3">
                                    <label for="tiempo">Tiempo de la receta</label>
                                    <input  class="form-control" id="tiempo" placeholder="30min" required> 
                                </div>
                            </center>

                            
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <button href="{{ route('steppers.create.step.one') }}" class="btn btn-dark pull-right">Anterior</button>
                            </div>
                            <div class="col-md-6 text-right">
                                <button href="{{ route('steppers.create.step.three') }}" class="btn btn-dark pull-right">Siguiente</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>