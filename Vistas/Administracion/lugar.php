<form class="form-horizontal">
  <fieldset>
    <div id="legend" class="">
      <legend class="">Lugar Capacitación</legend>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Lugar</label>
      <div class="controls">
        <input type="text" name="nombre_lugar" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">ID Lugar</label>
      <div class="controls">
        <input type="text" name="id_lugar" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">RUT</label>
      <div class="controls">
        <input type="text" name="rut" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Razón Social</label>
      <div class="controls">
        <input type="text" name="razon_social" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Persona de Contacto</label>
      <div class="controls">
        <input type="text" name="persona_contacto" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">E-Mail</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on">@</span>
          <input class="span2" name="mail" id="prependedInput" type="text" required="required">
        </div>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">Descripción Lugar</label>
      <div class="controls">
        <div class="textarea">
          <textarea name="des_lugar" required="required"></textarea>
        </div>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <button class="btn btn-success">Guardar</button>
      </div>
    </div>
  </fieldset>
</form>