<div class="form-group">
    <label for="pqrs_id" class="col-lg-3 control-label requerido">PQRS</label>
    <div class="col-lg-8">
        <select name="pqrs_id" id="pqrs_id" class="form-control" required>
            <option value="">Seleccione la PQRS</option>
            @foreach($datosPqrs as $id => $nombre)
                <option 
                value="{{$id}}">{{$nombre}}
                </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="motivo" class="col-lg-3 control-label requerido">Motivo</label>
    <div class="col-lg-8">
        <input type="text" name="motivo" id="motivo" class="form-control" value="{{old('motivo', $datosPqrs->motivo ?? '')}}" required/ placeholder="Motivo">
    </div>
</div>
<div class="form-group">
        <label for="descripcion" class="col-lg-3 control-label requerido">Descripcion</label>
        <div class="col-lg-8">
        <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion', $datosPqrs->descripcion ?? '')}}" placeholder="Enter ...">
        </div>
 </div>

