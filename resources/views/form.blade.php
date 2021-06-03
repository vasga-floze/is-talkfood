<x-app-layout>
    <x-slot name="header">

        <form class="form-inline my-4 my-lg-0">
            <a class="nav-link" href="{{ url('/form') }}">About Me</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="nav-link" href="{{ url('/form') }}">Favorites</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="nav-link" href="{{ url('/form') }}">Recipe Book</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

        </form>
    </x-slot>
    </x-app-layout>
    <div class="row justify-content-center my-5">
        <div class="col-md-10">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">
                        <div class="card-group">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card">
                                        
                                            <div class="card-header"> <h1 class="text-center">Crear Nueva Receta</h1></div>
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
                                                            </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


