<form class="form-horizontal">
  <fieldset>
    <div id="legend" class=""><legend class="">Empresas</legend></div>
    <div class="control-group">
      <label class="control-label" for="input01">Nombre Empresa</label>
      <div class="controls">
        <input type="text" name="nombre_empresa" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Rut Empresa</label>
      <div class="controls">
        <input type="text" name="rut_empresa" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">Descripción Empresa</label>
      <div class="controls">
        <div class="textarea">
          <textarea name="des_empresa" required="required"></textarea>
        </div>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Razón Social</label>
      <div class="controls">
        <input type="text" name="raz_soc" class="input-xlarge" required="required">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">Persona de Contacto</label>
      <div class="controls">
        <input type="text" name="per_con" class="input-xlarge" required="required">
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
      <div class="controls">
        <button class="btn btn-success">Guardar</button>
      </div>
    </div>
  </fieldset>
</form>