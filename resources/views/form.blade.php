<x-app-layout>
    <x-slot name="header">
        <form class="form-inline my-4 my-lg-0">
            <a class="nav-link mx-auto" href="{{ url('/aboutme') }}"><span>About Me</span></a>

            <a class="nav-link mx-auto" href="{{ url('/favorites') }}"><span>Favorites</span></a>

            <a class="nav-link mx-auto" href="{{ url('/recipebook') }}"><span>Recipe Book</span></a>
        </form>
    </x-slot>
</x-app-layout>

<div class="row justify-content-center my-5">
    <div class="card">
        <div class="card-header"> 
            <h1 class="text-center">Crear Nueva Receta</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form >
                    <div class="form-group text-center">
                        <label  for="receta">Nombre de la receta</label>
                        <input  class="form-control" id="receta">
                    </div>
                    <div class="form-group text-center">
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

                    <div class="card">
                        <div class="card-body">

                            <h3 class="text-center">Ingresar Pasos</h3>
                            <div class="form-group text-center">
                                <label for="receta">Nombre del ingrediente</label>
                                <input  class="form-control" id="receta">
                            </div>

                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                <label class="custom-file-label" for="customFileLang">Seleccionar Imagen de su ingrediente</label>
                            </div>
                            <h1></h1>
                            <h1></h1>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Agregar Ingrediente</button>
                            </div>
                        </div>
                    </div>

                    <div class="custom-control custom-switch text-center">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1"></input>
                        <label class="custom-control-label" for="customSwitch1">Publico</label>
                        <small class="form-text text-muted">Marque el switch para que su receta sea publica.</small>
                    </div>
                    <h1></h1>
                    
                    <div class="text-center pb-3">
                        <button type="submit" class="btn btn-primary">Crear Receta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="text-center pb-3">
    <a href="/recipebook">
        <button type="submit" class="btn btn-dark">Volver</button>
    </a>
</div>


