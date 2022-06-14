<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">

                    @if (!empty($employees->id))
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <div>
                                <input class="form-control" placeholder="Nombre" required="required" name="nombre"
                                    type="text" id="nombre" value="{{ $employees->nombre }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <div>
                                <input class="form-control" placeholder="Apellido" required="required" name="apellido"
                                    type="text" id="apellido" value="{{ $employees->apellido }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <div>
                                <input class="form-control" placeholder="Correo Electronico" required="required"
                                    name="correo" type="email" id="correo" value="{{ $employees->correo }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="compania_id">Compañia:</label>

                            <select name="compania_id" id="compania_id" class="form-control">
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}" {{$company->id == $employees->compania_id ? 'selected' : '' }} >{{ $company->nombre}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <div>
                                <input class="form-control" placeholder="Telefono" required="required" name="telefono"
                                    type="number" id="telefono" value="{{ $employees->telefono }}">
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
                            <label for="apellido">Apellido:</label>
                            <div>
                                <input class="form-control" placeholder="Apellido" required="required" name="apellido"
                                    type="text" id="apellido">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <div>
                                <input class="form-control" placeholder="Correo Electronico" required="required"
                                    name="correo" type="email" id="correo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="compania_id">Compañia:</label>

                            <select name="compania_id" id="compania_id" class="form-control">
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->nombre}}</option>
                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <div>
                                <input class="form-control" placeholder="Telefono" required="required" name="telefono"
                                    type="number" id="telefono">
                            </div>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-info">Guardar</button>
                    <a href="{{ route('admin/employees') }}" class="btn btn-warning">Cancelar</a>

                    <br>
                    <br>

                </div>
            </section>
        </div>
    </div>
</div>
