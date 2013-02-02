<link rel="stylesheet" href="assets/css/datepicker.css">
<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2>&Oacute;rdenes de Trabajos Inacap</h2>
        <div class="row">
  <form action="">
      <div class="span5">
        <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Número OT</label>
          <div class="controls">
            <input type="text" placeholder="Ejemplo 2356" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Nombre OT</label>
          <div class="controls">
            <input type="text" placeholder="Ejem: Matemática Aplicada a la Industria" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
         <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label">Sede OT</label>
          <div class="controls">
            <select class="input-xlarge">
      <option>Arica</option>
      <option>Iquique</option>
      <option>Antofagasta</option>
      <option>Santiago</option></select>
          </div>

        </div>
        <div class="control-group">
          <label class="control-label">Tipo OT</label>
          <div class="controls">
      <!-- Multiple Radios -->
      <label class="radio">
        <input type="radio" value="Presencial" name="tipo_ot" checked="checked">
        Presencial
      </label>
      <label class="radio">
        <input type="radio" value="Virtual" name="tipo_ot">
        Virtual
      </label>
  </div>

        </div>

    <div class="control-group">
    <label class="control-label">Fecha Inicio</label>
    <div class="controls">
      <div class="input-append date" id="dp1" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
        <input class="span2" size="16" type="text" value="12-02-2012">
        <span class="add-on"><i class="icon-th"></i></span>
      </div>
    </div>
  </div>

    <div class="control-group">
    <label class="control-label">Fecha Término</label>
    <div class="controls">
      <div class="input-append date" id="dp2" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
        <input class="span2" size="16" type="text" value="12-02-2012">
        <span class="add-on"><i class="icon-th"></i></span>
      </div>
    </div>
  </div>
          
    <div class="control-group">
    <label class="control-label" for="input01">Horas</label>
    <div class="controls">
      <input type="text" placeholder="" class="input-xlarge">
    </div>
  </div>

      </div>
      <div class="span5">
<div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Participantes</label>
          <div class="controls">
            <input type="text" placeholder="" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Prepended text-->
          <label class="control-label">Valor por Hora</label>
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on">$</span>
              <input class="span2" placeholder="Ejem: 20000" id="prependedInput" type="text">
            </div>
            <p class="help-block"></p>
          </div>

        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Empresa</label>
          <div class="controls">
            <input type="text" placeholder="Ejem: Collahuasi" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Tipo de Curso</label>
          <div class="controls">
            <input type="text" placeholder="Ejem: Apéndice" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Search input-->
          <label class="control-label">Lugar</label>
          <div class="controls">
            <input type="text" placeholder="Ejem: Sede Inacap Iquique" class="input-xlarge search-query">
            <p class="help-block"></p>
          </div>

        </div>
        <div class="control-group">
          <label class="control-label"></label>

          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success">Guardar</button>
          </div>
        </div>

      </div>
  </form>
  
</div>
        
 
      
    

    

   

    
		
    

    

<script language="javascript">
	$('#dp1').datepicker();
	$('#dp2').datepicker();
</script>

          </div>
