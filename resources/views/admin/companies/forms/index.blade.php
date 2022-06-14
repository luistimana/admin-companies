<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif

                    @if (!empty($companies->id))

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <div>
                                <input class="form-control" placeholder="Nombre" required="required" name="nombre"
                                    type="text" id="nombre" value="{{ $companies->nombre }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <div>
                                <input class="form-control" placeholder="Correo Electronico" required="required"
                                    name="correo" type="email" id="correo" value="{{ $companies->correo }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pagina_web">Página web:</label>
                            <div>
                                <input class="form-control" placeholder="40" required="required" name="pagina_web"
                                    type="text" id="pagina_web" value="{{ $companies->pagina_web }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="logo">Selecciona una imagen para el logo:</label>
                            <div>
                                <input name="logo" type="file" id="logo">
                                <br>
                                <br>

                                @if (!empty($companies->logo))
                                    <span>Logo Actual: </span>
                                    <br>
                                    <img src="/storage/{{ $companies->logo }}" width="200" class="img-fluid">
                                @else
                                    Aún no se ha cargado una imagen para esta compañia
                                @endif

                            </div>

                        </div>
                    @else
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <div>
                                <input class="form-control" placeholder="Nombre" required="required" name="nombre"
                                    type="text" id="nombre">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <div>
                                <input class="form-control" placeholder="Correo Electrónico" required="required"
                                    name="correo" type="email" id="correo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="logo">Selecciona una imagen para el logo:</label>
                            <div>
                                <input name="logo" type="file" id="logo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pagina_web">Página web:</label>
                            <div>
                                <input class="form-control" placeholder="Página web" required="required"
                                    name="pagina_web" type="text" id="pagina_web">
                            </div>
                        </div>



                    @endif

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('admin/companies') }}" class="btn btn-warning">Cancelar</a>

                    <br>
                    <br>

                </div>
            </section>
        </div>
    </div>
</div>
