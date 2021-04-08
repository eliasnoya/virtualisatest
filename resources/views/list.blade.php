<div class="row mb-3">
    <div class="col-md-9">
        <h3>Lista Empleados</h3>
    </div>
    
    <div class="col-md-3 text-right">
        <button type="button" class="btn btn-danger"  onclick="main();">
            <i class="bi bi-x"></i> Salir
        </button>
    </div>
</div>

<table class="table table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th>#Legajo</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Localidad</th>
            <th>Tipo Documento</th>
            <th>Nro Documento</th>
            <th>Código Postal</th>
            <th>Provincia</th>
        </tr>
    </thead>
    
    <tbody>
        
        @foreach ($empleados as $e)
        <tr>
            <td>{{$e->id_legajo}}</td>
            <td>{{$e->apellido}}</td>
            <td>{{$e->nombre}}</td>
            <td>{{$e->provincia}}</td>
            <td>{{$e->direccion}}</td>
            <td>{{$e->desc_tipo_documento}}</td>
            <td>{{$e->nro_documento}}</td>
            <td>{{$e->codigopostal}}</td>
            <td>{{$e->provincia}}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
