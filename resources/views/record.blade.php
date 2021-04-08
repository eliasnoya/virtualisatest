
<div class="row mb-3">
    <div class="col-md-9">
        <h3>Alta de empleado</h3>
    </div>
    
    <div class="col-md-3 text-right">
        <button type="button" class="btn btn-danger" onclick="route('/')">
            <i class="bi bi-x"></i> Salir
        </button>
    </div>
</div>

<div class="alert alert-info alert-dismissible fade show" role="alert" style="display:none;" id="ajxResContainer">
  <strong id="ajxRes"></strong>
</div>

<form id="crearEmpleado">

    <div class="row mb-3">
        <div class="col">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre"/>
        </div>
        
        <div class="col">
            <label>Apellido</label>
            <input type="text" class="form-control" name="apellido"/>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-3">
            <label>Provincia</label>
            <select class="form-control" name="id_provincia">
                <option value="">Seleccionar provincia</option>
                @foreach ($provincias as $p)
                    <option value="{{$p->id_provincia}}">{{$p->provincia}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion"/>
        </div>

        <div class="col-md-3">
            <label>Cod. Postal</label>
            <input type="text" class="form-control" name="codigopostal"/>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <label>Tipo de Documento</label>
            <select class="form-control" name="id_tipo_documento">
                <option value="">Seleccionar tipo de documento</option>
                @foreach ($tipos as $t)
                    <option value="{{$t->id_tipo_documento}}">{{$t->tipo_documento}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="col">
            <label>Nro Documento</label>
            <input type="text" class="form-control" name="nrodocumento"/>
            
        </div>
    </div>

    <div style="clear:both; height:10px;"></div>

    <button type="button" class="btn btn-success " onclick="guardarEmpleado();">
        <i class="bi bi-save"></i> Guardar
    </button>
    
    <button type="button" class="btn btn-danger " onclick="route('/');">
        <i class="bi bi-x"></i> Salir
    </button>

</form>

