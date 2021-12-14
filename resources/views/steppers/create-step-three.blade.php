<x-app-layout>
    <x-slot name="header">
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('steppers.create.step.three.post') }}" method="post" >
                <div class="card">
                    <div class="card-header">Paso 3 </div>
        
                        <div class="card-body text-center">
                            <div class="form-group text-center">
                                            
                                        </div>

                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                                            <label class="custom-file-label" for="customFileLang">Seleccionar fotografía de resultado final</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Privacidad de la receta</label><br/>
                                            <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($product->status) && $product->status == '1') ? "checked" : "" }}}> Publico</label>
                                            <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($product->status) && $product->status == '0') ? "checked" : "" }}}> Privada</label>
                                        </div>

                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-6 text-left">
                                                    <a href="{{ route('steppers.create.step.two') }}" class="btn btn-dark pull-right">Anterior</a>
                                                </div>
                                            </div>
                                        </div>
                            </div>            
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="/dashboard" class="btn btn-dark pull-right">Publicar Receta</a>
            </div>
        </div>
    </div>
</div>
</x-app-layout>