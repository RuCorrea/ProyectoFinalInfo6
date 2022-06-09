
      
      
      <div class="form-gorup">
        <label for="razon_social" class="form-label">Razón Social</label>
        <input type="text" class="form-control" name="razon_social"id="razon_social" value="{{ old('razon_social', $cliente->razon_social) }}">
      </div>
      <div class="mb-3">
        <label for="persona_moral/fisica" class="form-label">Tipo de razón social</label>
        <select class="form-select" aria-label="Default select example">
          <option selected>Selecciona tipo de persona</option>
          <option value="0">Persona Moral</option>
          <option value="1">Persona Física</option>
        </select>
        <input type="boolean" class="form-select" name="tipo_de_persona" id="tipo_de_persona" value="{{ old('tipo_de_persona', $cliente->tipo_de_persona) }}">
      </div>
      <div class="mb-3">
        <label for="rfc" class="form-label">RFC</label>
        <input type="boolean" class="form-control" name="rfc" id="rfc" value="{{ old('rfc', $cliente->rfc) }}">
      </div>
      <div class="mb-3">
        <label for="domicilio"> Domicilio fiscal </label>
        <input type="boolean" class="form-control" name="domicilio" id="domicilio" rows="2" value="{{ old('domicilio', $cliente->domicilio) }}">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="text" class="form-control" name="email" id="email" value="{{ old('email', $cliente->email) }}">
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono', $cliente->telefono) }}">
      </div>
      
      <button type="submit" class="btn btn-primary">Guardar</button>
    

       